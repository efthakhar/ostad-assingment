<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller {
	public function posts() {
		return Post::with('category')->get();
	}

	public function postsPage() {
		$posts = $this->posts();
		return view('posts',[
            'posts' => $posts
        ]);
	}

	public function destroy($id) {
		$post = Post::findOrFail($id);
		$post->delete();
	}
}
