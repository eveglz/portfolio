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
    return view('index');
});

Route::get('/kna-world', function () {
    return view('kna-world');
});

Route::get('/ventanilla-facil', function () {
    return view('ventanilla-facil');
});

Route::get('/about', function () {
    return view('about');
});