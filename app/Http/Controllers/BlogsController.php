<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Blog;
use App\SlidersHome;
class BlogsController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $blogs = Blog::orderBy('id', 'desc')->get();
        $sliders = SlidersHome::orderBy('id')->get();
        return view('blogs.index', [
            'sliders' => $sliders,
            'blogs' => $blogs,
            'user' => $user,
                                  ]);
    }

    public function article($url)
    {
        $sliders = SlidersHome::orderBy('id')->get();
        $user = Auth::user();
        $article = Blog::where('url', $url)->first();
        return view('blogs.article', [
            'sliders' => $sliders,
            'article'=>$article,
            'user'=>$user
        ]);
    }
}