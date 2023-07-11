<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // get posts from database
    function index(Request $request) {
        $page = $request->query('page',1);
        $per_page = $request->query('per_page', 10);
        return Post::with(['author','category'])->orderBy('id', 'desc')->paginate($per_page);
    }
}
