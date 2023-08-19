<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialAuthController;

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
    return view('landing');
});
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/login', function () {
    return view('auth.login');
})->middleware('auth');

// Route::post('/login', function () {
//     return view('auth.login');
// })->middleware('auth');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('admin');

Route::get('/staffs1', function () {
    return view('staffs.index');
})->middleware('staff');

Route::get('/clients', function () {
    return view('admin.clients.index');
});

Route::get('/admin/profiles', function () {
    return view('admin.profiles.index');
})->middleware('admin');


Route::get('/alumnus', function () {
    return view('admin.alumnus.index');
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
})->name('client1');

Route::get('/client1/srvc', function () {
    return view('clients.srvc.index');
});

Route::get('/client1/appointment', function () {
    return view('clients.appointment.index');
});

Route::get('/client1/faqs', function () {
    return view('clients.faqs.index');
});

Route::get('/client1/transaction_history', function () {
    return view('clients.transaction_history.index');
});

Route::get('auth/google', [SocialAuthController::class, 'redirectToProvider'])->name('google-auth');
Route::get('auth/google/callback', [SocialAuthController::class, 'handleProviderCallback']);
