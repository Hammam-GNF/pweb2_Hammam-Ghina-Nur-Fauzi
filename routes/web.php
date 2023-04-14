<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', [AuthController::class, 'loginpage'])->name('loginpage');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/daftar-guru', [GuruController::class, 'guru'])->name('guru');
Route::get('/create-guru', [GuruController::class, 'create'])->name('create-guru');
Route::post('/insert-guru', [GuruController::class, 'insert'])->name('insert-guru');
Route::get('/edit-guru', [GuruController::class, 'edit'])->name('edit-guru');
Route::post('/delete-guru', [GuruController::class, 'destroy'])->name('delete-guru');
Route::get('/daftar-siswa', [SiswaController::class, 'siswa'])->name('siswa');
Route::get('/create-siswa', [SiswaController::class, 'siswa'])->name('create_siswa');
Route::post('/insert-siswa', [SiswaController::class, 'insert'])->name('insert_siswa');
