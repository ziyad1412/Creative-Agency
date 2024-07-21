<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //index
    public function index()
    {
        return view('front.index');
    }
    // details
    public function details()
    {
        return view('front.details');
    }
    //book
    public function book()
    {
        return view('front.book');
    }
}
