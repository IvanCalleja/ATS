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

<<<<<<< Updated upstream
Route::get('/staffs', function () {
    return view('staffs');
});

=======
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/clients', function () {
    return view('clients');
=======
Route::get('/staffs', function () {
    return view('staffs');
>>>>>>> d1e025c3058591dd1925872154e5849e4d921880
=======
>>>>>>> Stashed changes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
