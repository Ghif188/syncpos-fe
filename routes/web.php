<?php

use App\Http\Controllers\AksesApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DataCheckup;
use Illuminate\Support\Facades\Http;
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

Route::get('/', [AuthController::class, 'index']); 
Route::get('/register', [AuthController::class, 'registerView'])->name('register-view');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'loginView'])->name('login-view');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('secondpage.cariNik');
})->name('dashboard');

Route::post('/cariNIK', [Dashboard::class, 'cariNik'])->name('cari-nik');

Route::get('/tambahPasien', function () {
    return view('secondpage.tambahDataPasien');
})->name('tambah-pasien');

Route::get('/aksesAPI', [AksesApiController::class, 'index'])->name('akses-api');