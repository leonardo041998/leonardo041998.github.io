<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.index'); 
    }

    public function about()
    {
        return view ('dashboard.about');
    }

    public function contact()
    {
        return view ('dashboard.contact');
    }

    public function checkout()
    {
        return view ('checkouts.index');
    }

    public function shop()
    {
        return view ('dashboard.shop');
    }
}
