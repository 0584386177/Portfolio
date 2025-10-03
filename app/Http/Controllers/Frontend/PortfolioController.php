<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        $posts = Post::with(['user', 'category'])->get();
        if (!$posts) {
            return view('pages.404');
        }


        return view('home.portfolio', compact('posts'));
    }
}
