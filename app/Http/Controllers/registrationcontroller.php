<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentmodel;

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
        // print_r($request->all());
        $request-> validate([
            'email' => 'required | email',
            'name'=> 'required',
            'password' => 'required'
        ]);
        $std_data = new studentmodel();
        // echo '<pre>';
        // print_r($std_data->all());
        // echo '</pre>';
        $std_data->name = $request['name'];
        $std_data->email = $request['email'];
        $std_data->password = $request['password'];
        $std_data->save();
        return redirect('/registration');
    }
    public function studentview(){
        $std_data = studentmodel::all();
        $std = compact(['std_data']);
        return view('student-view')->with($std);
    }
}
