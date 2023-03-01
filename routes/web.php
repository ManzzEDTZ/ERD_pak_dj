<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/homepage', function () {
    return view('frontend.homepage');
});

Route::get('/course', function () {
    return view('frontend.course');
});

Route::get('/detail', function () {
    return view('frontend.detail');
});


Route::controller(App\Http\Controllers\RegisterController::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register', 'store')->name('register');
});

Route::controller(App\Http\Controllers\LoginController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});
