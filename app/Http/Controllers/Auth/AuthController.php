<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User\Siswa;
use App\Models\Vote\Vote;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            $siswa = Siswa::where('user_id', $user->id)->first();
            $checkVote = Vote::where('siswa_id', $siswa->id)->where('kandidat_ketua_id', 1)
                ->orWhere('kandidat_ketua_id', 2)->first();
            if ($checkVote == null) {
                return redirect()->route('user.murid.index')->with('error', 'You have already voted.');
            }
            if ($user->role == 1) {
                return redirect()->route('user.murid.index');
            } elseif ($user->role == 2) {
                return redirect()->route('user.admin.index');
            }
        }

        return redirect()->route('auth.index')->with('error', 'datsdgmudkfcwjmh.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return view('auth.index');
    }
}
