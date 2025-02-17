<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function aboutusview(){
        return view('pages.about-us');
    }
    public function dummyproductview(){
        return view('pages.products');
    }
    
}
