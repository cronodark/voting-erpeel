<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kandidat\KandidatKetua;
use App\Models\Kandidat\KandidatWakil;
use App\Models\User;
use App\Models\Vote\Vote;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $ketua = KandidatKetua::all();
        $wakil = KandidatWakil::all();
        $votesatu = Vote::where('kandidat_ketua_id', 1)->get()->count();
        $votedua = Vote::where('kandidat_ketua_id', 2)->get()->count();
        $totalvoter = Vote::where('kandidat_ketua_id', 1)
            ->orWhere('kandidat_ketua_id', 2)->count();
        $hasilsatu = ($votesatu / $totalvoter) * 100;
        $hasildua = ($votedua / $totalvoter) * 100;
        $votesatuw = Vote::where('kandidat_wakil_id', 1)->get()->count();
        $voteduaw = Vote::where('kandidat_wakil_id', 2)->get()->count();
        $hasilsatuw = ($votesatuw / $totalvoter) * 100;
        $hasilduaw = ($voteduaw / $totalvoter) * 100;
        $persensatu = number_format($hasilsatu, '1');
        $persendua = number_format($hasildua, '1');
        $persensatuw = number_format($hasilsatuw, '1');
        $persenduaw = number_format($hasilduaw, '1');
        // dd($persensatu);
        return view('user.admin.index', [
            'ketua' => $ketua,
            'wakil' => $wakil,
            'votesatu' => $votesatu,
            'votedua' => $votedua,
            'persensatu' => $persensatu,
            'persendua' => $persendua,
            'votesatuw' => $votesatuw,
            'voteduaw' => $voteduaw,
            'persensatuw' => $persensatuw,
            'persenduaw' => $persenduaw,
        ]);
    }
}
