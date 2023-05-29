<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/submit', function (Request $request) {

    $email = $request->input('email');

    $response = [
        'success' => true,
        'message' => 'Form submitted successfully.'
    ];

    return response()->json($response, 200);
});