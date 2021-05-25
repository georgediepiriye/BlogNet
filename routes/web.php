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
 ->middleware('guest');

 

 
 Route::view('/login','login')->name('login')->middleware('guest');
 Route::post('/login',[UserController::class,'login'])
 ->name('login')
 ->middleware('guest');

 Route::post('/logout',[UserController::class,'logout'])
 ->name('logout')->middleware('auth');


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

 Route::view('/posts/create','createpost')->name('createpost')
 ->middleware('auth');;

 Route::get('/users/{user:username}/posts',[UserPostController::class,'index'])
 ->name('user.posts');

 
 Route::get('/posts/{post}/details',[PostController::class,'show'])
 ->name('post.details');

 
 Route::get('/posts/category/sports',[PostController::class,'showSports'])
 ->name('posts.sports');
 
 Route::get('/posts/category/fashion',[PostController::class,'showFashion'])
 ->name('posts.fashion');
 
 Route::get('/posts/category/tech',[PostController::class,'showTech'])
 ->name('posts.tech');
 
 Route::get('/posts/category/politics',[PostController::class,'showPolitics'])
 ->name('posts.politics');
 
 


 
 

