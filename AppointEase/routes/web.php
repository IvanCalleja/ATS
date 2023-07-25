<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});


Route::post('/login', function () {
    return view('auth.login');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/staffs1', function () {
    return view('staffs.index');
});

Route::get('/clients', function () {
    return view('admin.clients.index');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/staffs', function () {
    return view('admin.staffs.index');
});

Route::get('/staffs/clients', function () {
    return view('staffs.clients.index');
});

Route::get('/faq', function () {
    return view('faq');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/client1', function () {
    return view('clients.index');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});

Route::get('/transaction_history', function () {
    return view('transaction_history');
});

Route::get('auth/google', [App\Http\Controllers\SocialAuthController::class, 'redirectToProvider'])->name('google-auth');
Route::get('auth/google/call-back', [SocialAuthController::class, 'handleProviderCallback']);


 