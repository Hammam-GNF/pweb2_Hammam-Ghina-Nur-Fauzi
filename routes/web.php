<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
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

Route::get('/', [AuthController::class, 'loginpage'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('/daftar-guru', [GuruController::class, 'guru'])->name('guru');
    Route::get('/create-guru', [GuruController::class, 'create'])->name('create-guru');
    Route::post('/insert-guru', [GuruController::class, 'insert'])->name('insert-guru');
    Route::get('/edit-guru/{id}', [GuruController::class, 'edit'])->name('edit-guru');
    Route::post('/update-guru/{id}', [GuruController::class, 'update'])->name('update-guru');
    Route::delete('/delete-guru/{id}', [GuruController::class, 'destroy'])->name('delete-guru');

    Route::get('/daftar-siswa', [SiswaController::class, 'siswa'])->name('siswa');
    Route::get('/create-siswa', [SiswaController::class, 'create'])->name('create-siswa');
    Route::post('/insert-siswa', [SiswaController::class, 'insert'])->name('insert-siswa');
    Route::get('/edit-siswa/{id}', [SiswaController::class, 'edit'])->name('edit-siswa');
    Route::post('/update-siswa/{id}', [SiswaController::class, 'update'])->name('update-siswa');
    Route::delete('/delete-siswa/{id}', [SiswaController::class, 'destroy'])->name('delete-siswa');
});
