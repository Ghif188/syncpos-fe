<?php

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

Route::get('/', function () {
    // $response = Http::post('http://35.240.194.181:4000/api/fasyankes/login', [
    //     'email' => 'toshka@toshka.com',
    //     'password' => 'password',
    // ]);
    // dd($response->body());
    return view('firstpage.welcome');
}); 
Route::get('/register', function () {
    return view('firstpage.register');
})->name('register');
Route::get('/login', function () {
    return view('firstpage.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('secondpage.utama');
})->name('navbar');

Route::get('/tambahPasien', function () {
    return view('secondpage.tambahDataPasien');
})->name('tambah-pasien');

Route::get('/aksesAPI', function () {
    return view('secondpage.aksesAPI');
})->name('navbar1');