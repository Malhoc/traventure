<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function aboutUs()
    {
        return view('pages.about-us');
    }
}
