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
    return view('home');
});

Route::get('/kuisioner', function () {
    return view('kuisioner');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/signup', function () {
    return 'Signup Page'; // Atau arahkan ke view signup jika ada
});