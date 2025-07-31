<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portofolio::latest()->take(3)->get();
        $blogs = Blog::latest()->take(3)->get();

        $profile = (object) [
            'name' => 'John Doe',
            'description' => 'Web Developer & Designer'
        ];

        return view('home', compact('portfolios', 'blogs', 'profile'));
    }
}
