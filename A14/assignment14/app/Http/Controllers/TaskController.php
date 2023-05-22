<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller {


    // controller method related to question 1
    // store name retrieved from request
	public function store_name(Request $request) {
		$name = $request->input('name');
	}


    // controller method related to question 2 
    // retrieve value of user agent and store it a $userAgent variable
	public function get_user_agent(Request $request) {
		$userAgent = $request->header('User-Agent');
	}


    // controller method related to question 3 
    // retreive value of query parameter page and store it 
	public function get_tasks(Request $request) {
       $page  = $request->query('page',null);
	}


    // controller method related to question 4 
    // create json response
	public function get_json_response(Request $request) {

        $data = [
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25
            ]
        ];
        
        return response()->json($data,200);
	}


    // controller method related to question 5 
    // upload and store uploaded file
	public function upload(Request $request) {

        if ($request->hasFile('avatar')) {

            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);

            return 'File uploaded successfully.';
        }
    
        return 'Failed to upload file';
	}


    // controller method related to question 6 
    // Retrieve the value of the 'remember_token' cookie from the current request
	public function remember_token(Request $request) {
        $rememberToken = $request->cookie('remember_token',null);
	}





}
