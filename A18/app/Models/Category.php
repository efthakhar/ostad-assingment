<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model {
	use HasFactory;
	protected $fillable = ['name'];

	/**
	 * Get the posts associated with the category
	 */
	public function posts(): HasMany {
		return $this->hasMany(Post::class);
	}

	public function latestPost() {
		return $this->hasOne(Post::class)->latestOfMany();
	}
}
