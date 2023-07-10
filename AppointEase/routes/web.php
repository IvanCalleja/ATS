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

Route::middleware('guest')->get('/', function () {
    return view('auth.login');
});


Route::post('/login', function () {
    return view('auth.login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/staffs', function () {
    return view('staffs');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/staff', function () {
    return view('staff');
});

Route::get('/faq', function () {
    return view('faq');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/client', function () {
    return view('client');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});
