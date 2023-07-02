<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model {
	use HasFactory;
    use SoftDeletes;

	/**
	 * Get the category associated with the post
	 */
	public function category(): BelongsTo {
		return $this->belongsTo(Category::class);
	}

	/**
	 * Get number of total posts in a cetegory
	 */
    public static function countPostsByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }

    /**
	 * Get soft deleted posts
	 */
    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }
}
