<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


///////////////////////////////////////////////////////
//    All Routes Related To Assignment 14
///////////////////////////////////////////////////////

//Route related to question 1 
// retrieve name from the post request and store it in name variable
Route::post('/store-name',[TaskController::class,'store_name']);


//Route related to question 2 
// retreive value of user agent 
Route::get('/get-user-agent',[TaskController::class,'get_user_agent']);


//Route related to question 3 
// retreive value of query parameter page and store it
Route::get('/tasks',[TaskController::class,'get_tasks']);


//Route related to question 4 
// create json response
Route::get('/get-json-response',[TaskController::class,'get_json_response']);


//Route related to question 5 
// upload and store uploaded file
Route::post('/upload',[TaskController::class,'upload']);


//Route related to question 6 
// retrieve the remember token cookie
Route::get('/remember-token',[TaskController::class,'remember_token']);


//Route related to question 7 
// Retrieve email from reuest and return json response
Route::post('/submit', function (Request $request) {

    $email = $request->input('email');

    $response = [
        'success' => true,
        'message' => 'Form submitted successfully.'
    ];

    return response()->json($response, 200);
});