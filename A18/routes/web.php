<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostController::class, 'postsPage'])->name('posts.post');
Route::delete('/posts/{id}/delete', [PostController::class, 'destroy'])->name('posts.delete');

Route::get('/categories/{id}/posts', [CategoryController::class, 'showPosts'])->name('categories.posts');
