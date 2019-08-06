<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function first(){
        $data["title"]      = "Hello Laravel";
        $data["message"]    = "Belajar Laravel Itu Sangat Mudah";
        return view("test_view",$data);
    }
    
    public function form(){
        return view("form_view");
    }

    public function send(Request $request){
        $nama       = $request->nama;
        $email      = $request->email;
        $telepon    = $request->telepon;

        return "Hai, My Name is ".$nama.", You can call me on ".$telepon." or send me mail at ".$email;
    }
}
