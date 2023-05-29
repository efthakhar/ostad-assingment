<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;


class FormRegistrationController extends Controller
{

    public function register(Request $request) {

        try{

            $validator = Validator::make(
                $request->all(), 
                [
                    'name' => 'required|string|min:2',
                    'email' => 'required|email',
                    'password' => 'required|string|min:8',
                ]     
            );

            if($validator->fails()) {
               throw new ValidationException($validator);
            }

            return response()->json([
                'success' => true, 
                'message' => 'form validated successfully', 
            ],201);

        }catch(ValidationException $e){

        
            return response()->json([
                'success' => false, 
                'message' => 'validation error occured',
                'errors'  => $e->errors(),
            ],422);
           

        }
        
    }
}
