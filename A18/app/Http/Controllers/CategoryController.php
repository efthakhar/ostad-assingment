<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller {

	public function showPosts($id) {
		$category = Category::findOrFail($id);
		$posts    = $category->posts;

		return view('posts.index', compact('posts'));
	}
}
