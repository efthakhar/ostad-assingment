<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	use HasFactory;
	protected $fillable = [
		'title',
		'slug',
		'excerpt',
		'content',
		'blog_img_url',
		'published_at',
		'category_id',
		'author_id',
	];

	public function author() {
		return $this->BelongsTo(User::class);
	}

	public function category() {
        return $this->BelongsTo(Category::class);
	}
}
