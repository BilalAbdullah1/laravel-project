<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
    public function registration(){
        return view('registration');
    }
    // public function create(Request $request){
    //     print_r($request-> all());
    //     return view('registraion');
    // }
    public function create(Request $request){
        $request-> validate([
            'name' => 'required | name',
            'email'=> 'required',
            'password' => 'required'
        ]);
    }
}
