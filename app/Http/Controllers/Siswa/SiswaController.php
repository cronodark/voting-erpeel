<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Kandidat\KandidatKetua;
use App\Models\Kandidat\KandidatWakil;
use Illuminate\Http\Request;

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
}
