<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, 'createPost'])->name('create.post');
Route::post('/post-store', [PostController::class, 'postStore'])->name('post.store');