<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User\Siswa;
use App\Models\Vote\Vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }
    public function login(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            $siswa = Siswa::where('user_id', $user->id)->first();
            // dd($user);
            if ($user->role == 1) {
                $checkVote = Vote::where('siswa_id', $siswa->id)
                    ->where(function ($query) {
                        $query->where('kandidat_ketua_id', 1)
                            ->orWhere('kandidat_ketua_id', 2);
                    })
                    ->where(function ($query) {
                        $query->where('kandidat_wakil_id', 1)
                            ->orWhere('kandidat_wakil_id', 2);
                    })
                    ->first();

                if ($checkVote == null) {
                    return redirect()->route('user.murid.index');
                } else {
                    Auth::logout();
                    return redirect()->route('auth.index')->with('error', 'You have already voted.');
                }
            } elseif ($user->role == 2) {
                return redirect()->route('user.admin.index');
            }
        }
        return redirect()->route('auth.index')->with('error', 'Username atau password salah!');
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'username' => ['required'],
    //         'password' => ['required'],
    //     ]);
    //     // dd($credentials);
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         $user = Auth::user();
    //         $siswa = Siswa::where('user_id', $user->id)->first();
    //         // dd($siswa);
    //         if ($user->role == 1) {
    //             $checkVote = Vote::where('siswa_id', $siswa->id)->where('kandidat_ketua_id', 1)
    //                 ->orWhere('kandidat_ketua_id', 2)->get();
    //             dd($checkVote);
    //             if ($checkVote == null) {
    //                 return redirect()->route('user.murid.index');
    //             } else {
    //                 Auth::logout();
    //                 return redirect()->route('auth.index')->with('error', 'You have already voted.');
    //             }
    //             // if ($checkVote->kandidat_ketua_id == 1 or 2 && $checkVote->kandidat_wakil_id == 1 or 2) {
    //             //     return redirect()->route('auth.index')->with('error', 'You have already voted.');
    //             // } else if (!$checkVote->kandidat_ketua_id == 1 or 2 && $checkVote->kandidat_wakil_id == 1 or 2) {
    //             //     return redirect()->route('user.murid.index');
    //             // }
    //         } elseif ($user->role == 2) {
    //             return redirect()->route('user.admin.index');
    //         }
    //     }



    public function logout(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Auth::logout();

        return redirect('/');
    }
}
