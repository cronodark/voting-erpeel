<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Kandidat\KandidatKetua;
use App\Models\Kandidat\KandidatWakil;
use App\Models\Vote\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index()
    {
        $ketua = KandidatKetua::all();
        $wakil = KandidatWakil::all();
        return view('user.murid.index', [
            'ketua' => $ketua,
            'wakil' => $wakil
        ]);
    }

    public function vote(Request $request)
    {
        $user = auth()->user();
        $vote = Vote::query()->create([
            'siswa_id' => $user->id,
            'kandidatKetua_id' => $request->idketua,
            'kandidatWakil_id' => $request->idwakil,
        ]);
        if ($vote) {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return route('auth.index');
        }
    }
}
