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
        $totaluser = User::all()->count();
        $persensatu = ($votesatu / $totaluser) * 100;
        $persendua = ($votedua / $totaluser) * 100;
        $votesatuw = Vote::where('kandidat_wakil_id', 1)->get()->count();
        $voteduaw = Vote::where('kandidat_wakil_id', 2)->get()->count();
        $persensatuw = ($votesatuw / $totaluser) * 100;
        $persenduaw = ($voteduaw / $totaluser) * 100;
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
