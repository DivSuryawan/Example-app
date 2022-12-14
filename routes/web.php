<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StmikController;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/stmik',[StmikController::class, 'index']);

Route::get('/register',[StmikController::class, 'register']);

Route::get('/login', function () {
    return view('Auth.Login');
})->name('login')->middleware('guest');

Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('auth.loginproccess');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);


    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/create', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('/createpegawai', [PegawaiController::class, 'store'])->name('pegawai.store');

    Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');

    Route::post('/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');

    Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');

});