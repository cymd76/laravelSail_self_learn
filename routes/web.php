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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/home', function () {
    return view('home');
});

Route::get('/user-registration', [\App\Http\Controllers\UserRegisterController::class, 'create'])
    ->middleware('guest')
    ->name('user-register');
Route::post('/user-registration', [\App\Http\Controllers\UserRegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])
    ->middleware('guest');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])
    ->middleware('guest');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
