<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CategoryPost;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{


    public function show($slug)
    {
        // Lấy ra danh mục theo slug
        $category = CategoryPost::where('slug', $slug)->firstOrFail();

        // Lấy ra các bài viết thuộc danh mục đó (hasMany)
        $posts = $category->posts()->latest()->get();

        if (!$posts) {
            return view('pages.404');
        }

        return view('pages.blog', compact('posts'));
    }

}
