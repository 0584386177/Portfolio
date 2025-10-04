<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\BlogService;
use Exception;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNan;

class BlogController extends Controller
{

    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }
    public function blog()
    {

        try {

            $posts = $this->blogService->getAllBlogs();
            if ($posts) {
                return view('pages.blog', compact('posts'));
            }
            return view('pages.404');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }


    }

    public function blog_detail($slug)
    {
        $post = Post::with(['user', 'category'])
            ->where('slug', $slug)
            ->first();

        if (!$post) {
            return view('pages.404');
        }
        return view('pages.blog-detail', compact('post'));
    }

}
