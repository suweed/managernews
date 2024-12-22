<?php

namespace App\Http\Controllers;

use App\Models\Post;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.index');
    }

    public function news()
    {
        $latestsPosts = Post::where('is_published', Post::Published)->orderBy('id', 'desc')->take(5)->get();
        $posts = Post::where('is_published', Post::Published)->paginate(1);
        return view('website.news.index', ['posts' => $posts, 'latestsPosts' => $latestsPosts]);
    }

    public function show(Post $new)
    {
        return view('website.news.single', ['new' => $new]);
    }
}
