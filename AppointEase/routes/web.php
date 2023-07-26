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

Route::get('/admin/profiles', function () {
    return view('admin.profiles.index');
});


Route::get('/staffs', function () {
    return view('admin.staffs.index');
});

Route::get('/staffs/clients', function () {
    return view('staffs.clients.index');
});

Route::get('/admin/rprts', function () {
    return view('admin.rprts.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/client1', function () {
    return view('clients.index');
});

Route::get('/client1/srvc', function () {
    return view('clients.srvc.index');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/client1/faqs', function () {
    return view('clients.faqs.index');
});

Route::get('/client1/transaction_history', function () {
    return view('clients.transaction_history.index');
});

Route::get('auth/google', [App\Http\Controllers\SocialAuthController::class, 'redirectToProvider'])->name('google-auth');
Route::get('auth/google/callback', [App\Http\Controllers\SocialAuthController::class, 'handleProviderCallback']);


