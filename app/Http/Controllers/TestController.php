<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //


    public function index()
    {
        // return 'Halo ini response dari controller TestController method index()';
        return view('test');
    }
}
