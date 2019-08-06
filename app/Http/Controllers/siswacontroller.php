<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class siswacontroller extends Controllers{
    public function siswa(){
        $halaman = 'siswa';
        $siswa_list = Siswa::all();
        return view('siswa.index', compact('halaman', 'siswa_list'));
    }
}