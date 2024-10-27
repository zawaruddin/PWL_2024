<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JajalController extends Controller
{
    
    public function turu(){
        return 'turu angkler';
    }

    public function tangi($input){
        return 'tangi '.$input;
    }

    public function samsul(){
        return 'samsul';
    }
}
