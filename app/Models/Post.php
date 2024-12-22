<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public const Published = 1;
    public const Unpublished = 0;

    protected $fillable = [
        'title',
        'gallery_id',
        'category_id',
        'is_published',
        'file',
        'description',
    ];

    public function gallery() {
        return $this->belongsTo(Gallery::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
