<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tour;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $tours = Tour::orderBy('id', 'DESC')->paginate(6);
        $blogs = Blog::orderBy('id', 'DESC')->paginate(3);
        return view('pages.index', compact('tours', 'blogs'));
    }
}
