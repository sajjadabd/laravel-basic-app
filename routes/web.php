<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\PostsController;


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

Route::get('/', [PagesController::class , 'home']);

Route::get('/login', [PagesController::class , 'login'])->name('login');
Route::get('/register', [PagesController::class , 'register'])->name('register');

	
Route::post('/logout', [AuthController::class , 'logout']);
Route::post('/login', [AuthController::class , 'login']);
Route::post('/register', [AuthController::class , 'register']);

Route::get('/create-post', [PostsController::class , 'createPost']);
Route::post('/create-post', [PostsController::class , 'storePost']);