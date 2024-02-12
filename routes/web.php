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

Route::get('/forgot-password', function () {
    return view('auth/forgotPassword');
})->name('admin.forgotPassword');

Route::get('/profile', function () {
    return view('auth/profile');
})->name('admin.profile');

Route::get('/edit-profile', function () {
    return view('auth/editprofile');
})->name('admin.editprofile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');

Route::get('/modals', function () {
    return view('modal');
})->name('admin.modal');

Route::get('/basic-table', function () {
    return view('tables/basic');
})->name('admin.basicTable');

Route::get('/data-table', function () {
    return view('tables/data');
})->name('admin.dataTable');

Route::get('/edit-table', function () {
    return view('tables/edit');
})->name('admin.editTable');

Route::get('/element-form', function () {
    return view('forms/element');
})->name('admin.elementForm');

Route::get('/advance-form', function () {
    return view('forms/advance');
})->name('admin.advanceForm');

Route::get('/validation-form', function () {
    return view('forms/validation');
})->name('admin.validationForm');

Route::get('/wizard-form', function () {
    return view('forms/wizard');
})->name('admin.wizardForm');
