<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public static function blogSlug($blog_category_id)
    {
        return BlogCategory::find($blog_category_id);
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class,'blog_category_id');
    }
}
