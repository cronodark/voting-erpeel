<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Siswa\SiswaController;
use App\Http\Controllers\Vote\VoteController;
use App\Models\Vote\Vote;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [AuthController::class, 'index'])->name('auth.index');
Route::post('/', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::group(['middleware' => ['auth', 'auth.check', 'prevent-back-history']], function () {
    Route::prefix('/siswa')->group(function () {
        Route::get('/', [SiswaController::class, 'index'])->name('user.murid.index');
        Route::post('/', [SiswaController::class, 'vote_ketua'])->name('user.murid.vote_ketua');
        Route::post('/', [SiswaController::class, 'vote_wakil'])->name('user.murid.vote_wakil');
    });

    Route::prefix('/admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('user.admin.index');
    });
});
