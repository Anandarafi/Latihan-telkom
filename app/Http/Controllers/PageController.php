<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function projek()
    {
        return view('projek');
    }
    public function daftar()
    {
        return view('daftar');
    }
}


