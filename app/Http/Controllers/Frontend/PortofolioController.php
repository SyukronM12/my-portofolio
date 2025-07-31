<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portofolio::latest()->paginate(9);
        return view('portofolio.index', compact('portofolios'));
    }

    public function show(string $slug)
    {
        $portfolio = Portofolio::where('slug', $slug)->firstOrFail();
        return view('portofolio.show', compact('portofolio'));
    }
}
