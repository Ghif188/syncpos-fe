<?php

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
    return view('firstpage.welcome');
});
Route::get('/register', function () {
    return view('firstpage.register');
})->name('register');
Route::get('/login', function () {
    return view('firstpage.login');
})->name('login');

Route::get('/coba', function () {
    return view('secondpage.utama');
})->name('navbar');

Route::get('/aksesAPI', function () {
    return view('secondpage.aksesAPI');
})->name('navbar1');