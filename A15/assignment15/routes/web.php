<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormRegistrationController;
use App\Http\Controllers\PostController;
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
    return redirect('/welcome');
});


// Route Related To Task 1: 
Route::post('/registration',[FormRegistrationController::class,'register']);


// Route Related To Task 2:

Route::get('/home', function () {
    return redirect('/dashboard', 302);
});

Route::get('/dashboard', function () {
    return "Dashboard";
});


// Route Related To Task 4:
Route::middleware(['AuthMiddleware'])->group(function () {

    Route::get('/profile', function () { });

    Route::get('/settings', function () {  });

});


// Route Related To Task 6:
Route::post('/contact-form-submit',ContactController::class);

// Route Related To Task 7:
Route::resource('posts',PostController::class);

// Route Related To Task 8:
Route::get('/welcome', function () {
    return view('welcome');
});