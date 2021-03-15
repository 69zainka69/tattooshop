<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $blogs = Blog::orderBy('id', 'desc')->get();

        return view('blogs.index', [
            'blogs' => $blogs,
            'user' => $user,
                                  ]);
    }

    public function article($url)
    {
        $user = Auth::user();
        $article = Blog::where('url', $url)->first();
        return view('blogs.article', [
            'article'=>$article,
            'user'=>$user
        ]);
    }
}