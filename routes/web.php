<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use  Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Route::view('/', 'index')->name('posts');



 Route::view('/register','register')->name('register');
 Route::post('/register',[UserController::class,'register'])->name('register');

 Route::view('/dashboard','dashboard')->name('dashboard');

 
 Route::view('/login','login')->name('login');
 Route::post('/login',[UserController::class,'login'])->name('login');

 Route::post('/logout',[UserController::class,'logout'])->name('logout');