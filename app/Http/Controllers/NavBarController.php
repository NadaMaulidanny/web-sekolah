<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavBarController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact-us');
    }

    public function product()
    {
        return view('product');
    }

    public function blog()
    {
        return view('blog');
    }

    public function about()
    {
        return view('about');
    }
}
