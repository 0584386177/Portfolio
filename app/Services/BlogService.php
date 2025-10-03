<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

/**
 * Class BlogService
 * @package App\Services
 */
class BlogService
{

    public function getAllBlogs()
    {
        $posts = Post::with(['user', 'category'])->get();
        return $posts;
    }
}
