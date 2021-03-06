<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'home']);
Route::get('/about', [PostController::class, 'about']);
Route::get('/post', [PostController::class, 'post']);
Route::get('/post/{post:slug}', [PostController::class, 'postId']);
Route::get('/category/{category:slug}', [PostController::class, 'categoryDetail']);
Route::get('/author/{user:slug}', [PostController::class, 'author']);