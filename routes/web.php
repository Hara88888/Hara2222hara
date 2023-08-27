<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the Ruse outeServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class,'index'])->name('post.index');
Route::get('/posts/create', [PostController::class,'create'])->name('post.create');
Route::get('/posts/{post}',[PostController::class,'show'])->name('post.show');
Route::post('/posts', [PostController::class,'store'])->name('post.store');
Route::get('posts/{post}/edit', [PostController::class,'edit'])->name('post.edit');