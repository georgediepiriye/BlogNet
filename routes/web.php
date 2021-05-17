<?php

use App\Http\Controllers\UserController;

use App\Http\Controllers\UserPostController;
use App\Http\Controllers\PostController;
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



 Route::view('/register','register')->name('register');
 Route::post('/register',[UserController::class,'register'])
 ->name('register')
 ->middleware('middleware');

 Route::view('/dashboard','dashboard')
 ->name('dashboard')->middleware('middleware');

 
 Route::view('/login','login')->name('login');
 Route::post('/login',[UserController::class,'login'])
 ->name('login')
 ->middleware('middleware');

 Route::post('/logout',[UserController::class,'logout'])
 ->name('logout')->middleware('middleware');

 Route::view('/', 'home');
 Route::get('/posts',[PostController::class,'index'])
 ->name('posts');
 Route::post('/posts',[PostController::class,'store'])
 ->name('posts');
 Route::delete('/posts/{post}',[PostController::class,'delete'])
 ->name('post.delete');

 Route::post('/posts/{post}/likes',[PostController::class,'like'])
 ->name('posts.likes');

 Route::delete('/posts/{post}/likes',[PostController::class,'unlike'])
 ->name('posts.likes');

 Route::view('/posts/create','createpost')->name('createpost');

 Route::get('/users/{user:username}/posts',[UserPostController::class,'index'])
 ->name('user.posts');

