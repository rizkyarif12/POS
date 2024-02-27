<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function food(){
        return view('home.food');
    }
    public function beauty(){
        return view('home.beauty');
    }
    public function home(){
        return view('home.homeCare');
    }
    public function baby(){
        return view('home.baby');
    }

    
}
