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
        $ketua = KandidatKetua::all();
        $wakil = KandidatWakil::all();
        // dd(auth()->user());
        return view('user.murid.index', [
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
            return redirect()->route('user.murid.index')->with('error', 'You have already voted.');
        }

        $voteaksi = Vote::query()->create([
            'siswa_id' => $user->id,
            'kandidatKetua_id' => $request->idketua,
            'kandidatWakil_id' => $request->idwakil,
        ]);
    }
    public function vote_wakil(Request $request)
    {
        $user = auth()->user();
        $siswa = Siswa::where('user_id', $user->id)->first();
        $vote = Vote::with(['siswa_id', 'kandidat_wakil_id'])
            ->where('siswa_id', $siswa->id)->where('kandidat_wakil_id', 1 or 2)->first();
        $voteberes = Vote::with(['siswa_id', 'kandidat_wakil_id'])
            ->where('siswa_id', $siswa->id)->where('kandidat_ketua_id', 1 or 2)->where('kandidat_wakil_id', 1 or 2)->first();
        if ($vote) {
            return redirect()->route('user.murid.index')->with('error', 'You have already voted.');
        }
        if ($voteberes) {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return route('auth.index');
        }
    }
}
