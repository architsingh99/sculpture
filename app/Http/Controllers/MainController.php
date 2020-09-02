<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;
use App\Category;
use App\Blog;

class MainController extends Controller
{
    //
    public function homepage(Request $request)
    {
        $p = Portfolio::with('categoryData')->get();
        $cat = Category::all();
        $b = Blog::all();
        return view('welcome')->with('portfolio', $p)->with('cat', $cat)->with('blog', $b);
    }
}
