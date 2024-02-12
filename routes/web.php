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
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth/login');
})->name('admin.login');

Route::get('/signup', function () {
    return view('auth/signup');
})->name('admin.signup');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');
