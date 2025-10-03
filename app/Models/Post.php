<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'short_description',
        'description',
        'slug',
        'thumbnail',
        'category_id',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryPost::class, 'category_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
