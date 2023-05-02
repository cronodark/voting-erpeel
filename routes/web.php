<?php

use App\Http\Controllers\Siswa\SiswaController;
use App\Http\Controllers\Vote\VoteController;
use App\Models\Vote\Vote;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.index');
});

Route::prefix('/siswa')->group(function () {
    Route::get('/', [SiswaController::class, 'index'])->name('user.murid.index');
});
