<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('blog.index', compact('blogs'));
    }

    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('blog'));
    }
}
