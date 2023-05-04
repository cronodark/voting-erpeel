<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Kandidat\KandidatKetua;
use App\Models\Kandidat\KandidatWakil;
use App\Models\User\Siswa;
use App\Models\Vote\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    // public function checkVote()
    // {
    //     $user = auth()->user();
    //     $siswa = Siswa::where('user_id', $user->id)->first();
    //     $vote = Vote::with(['siswa_id', 'kandidat_ketua_id', 'kandidat_ketua_id'])->where('siswa_id', $siswa->id)->first();

    // }

    public function index()
    {
        $user = auth()->user();
        $siswa = Siswa::where('user_id', $user->id)->first();
        $ketua = KandidatKetua::all()->sortBy('id');
        $wakil = KandidatWakil::all()->sortBy('id');
        // dd($user);
        return view('user.murid.index', [
            'ketua' => $ketua,
            'wakil' => $wakil,
            'siswa' => $siswa
        ]);
    }
    public function wakil()
    {
        $wakil = KandidatWakil::all()->sortBy('id');
        // dd($wakil);
        return view('user.murid.wakil', [
            'wakil' => $wakil,
        ]);
    }

    public function vote_ketua(Request $request)
    {
        $user = auth()->user();
        $wakil = KandidatWakil::all();
        $siswa = Siswa::where('user_id', $user->id)->first();
        $vote = Vote::where('siswa_id', $siswa->id)->where('kandidat_ketua_id', 1)
            ->orWhere('kandidat_ketua_id', 2)->first();
        // dd($vote);
        if ($vote) {
            return redirect()->route('user.murid.index')->with('error', 'You have already voted.');
        }

        $voteaksi = Vote::where('siswa_id', $siswa->id)->update([
            'kandidat_ketua_id' => $request->idketua,
        ]);

        return view('user.murid.wakil', [
            'voteaksi' => $voteaksi,
            'wakil' => $wakil
        ]);
    }

    public function vote_wakil(Request $request)
    {
        $user = auth()->user();
        $siswa = Siswa::where('user_id', $user->id)->first();
        $vote = Vote::with(['siswa_id', 'kandidat_wakil_id'])
            ->where('siswa_id', $siswa->id)->where('kandidat_wakil_id', 1 or 2)->first();
        if ($vote) {
            return redirect()->route('user.murid.wakil')->with('error', 'You have already voted.');
        }
        $voteaksi = Vote::where('siswa_id', $siswa->id)->update([
            'kandidat_wakil_id' => $request->idwakil,
        ]);
        if ($voteaksi) {

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            Auth::logout();

            return view('auth.index');
        }
    }
}
