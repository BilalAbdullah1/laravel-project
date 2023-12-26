<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutcontroller extends Controller
{
    public function about(){
        return view('about');
    }

    public function index(){
        return view('welcome');
    }
}
