<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // controller method for showing home page content
    function homePage() {  
        return view('pages.home');
    }

    // controller method for showing single blog page content
    function singlePostPage($slug){   
        $post =  Post::where('slug', '=', $slug )->with(['author','category'])->first(); 
        return view('pages.single-post',[
            'post'=>  $post
        ]);
    }
}
