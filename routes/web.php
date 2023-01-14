<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('post.show');

Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
