<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsertController extends Controller
{
    public function index($id, $nama){
        return 'User id : '. $id . ' Nama : '. $nama;
    }
}
