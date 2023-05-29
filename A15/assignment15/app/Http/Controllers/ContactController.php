<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

	public function __invoke(Request $request) {

		$validatedData = $request->validate([
			'name'    => 'required',
			'email'   => 'required|email',
			'message' => 'required',
		]);


		Mail::raw($validatedData['message'], function ($message) use ($validatedData) {
			$message->to('efthakharbin@gmail.com')
				->subject('New Contact Form Submission')
				->replyTo($validatedData['email']);
		});

	
		return response()->json(['success', 'Message sent successfully!'], 200);
	}
}
