<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        $namaLengkap = "Cristiano Ronaldo";
        return view('coba',[
            'nama' => $namaLengkap
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function hello($nama)
    {
        return view('hello', ['contoh' => $nama]);
    }
}
