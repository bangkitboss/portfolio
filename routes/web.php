<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('home', 'dashboard');

Route::get('/auth', [authController::class, 'index'])->name('login')->middleware('guest');
Route::get('/auth/redirect',[authController::class, 'redirect'])->middleware('guest');
Route::get('/auth/callback',[authController::class, 'callBack'])->middleware('guest');
Route::get('/auth/logout', [authController::class, 'logout']);


Route::get('/dashboard', function () {
    return 'admin admin';
})->middleware('auth');
