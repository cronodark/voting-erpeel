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

    public function ketua()
    {
        $ketua = KandidatKetua::all();
        $wakil = KandidatWakil::all();
        // dd(auth()->user());
        return view('user.murid.ketua', [
            'ketua' => $ketua,
            'wakil' => $wakil
        ]);
    }

    public function vote_ketua(Request $request)
    {
        $user = auth()->user();
        $siswa = Siswa::where('user_id', $user->id)->first();
        $vote = Vote::with(['siswa_id', 'kandidat_ketua_id'])
            ->where('siswa_id', $siswa->id)->where('kandidat_ketua_id', 1 or 2)->first();
        if ($vote) {
            return redirect()->route('user.murid.ketua')->with('error', 'You have already voted.');
        }

        $voteaksi = Vote::query()->create([
            'siswa_id' => $user->id,
            'kandidat_ketua_id' => $request->idketua,
        ]);

        return view('user.murid.wakil', [
            'voteaksi' => $voteaksi
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
        $voteaksi = Vote::query()->where('siswa_id', $user->id)->create([
            'kandidat_wakil_id' => $request->idketua,
        ]);
        if ($voteaksi) {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return route('auth.index');
        }
    }
}
