<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



// Blog Home Page Route
Route::get('/', [PageController::class,'homePage']);

// Single Post Page Route
Route::get('/posts/{slug}', [PageController::class,'singlePostPage']);

// Api Route for Fetching Posts
Route::get('/api/posts', [PostController::class,'index']);

