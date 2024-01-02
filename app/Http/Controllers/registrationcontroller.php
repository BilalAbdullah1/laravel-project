<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentmodel;

class registrationcontroller extends Controller
{
    public function registration()
    {
        return view('registration');
    }
    // public function create(Request $request){
    //     print_r($request-> all());
    //     return view('registraion');
    // }
    public function create(Request $request)
    {
        // print_r($request->all());
        $request->validate([
            'email' => 'required | email',
            'name' => 'required',
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
        return redirect('/registeration');
    }
    public function studentview()
    {
        $std_data = studentmodel::all();
        $std = compact(['std_data']);
        return view('student-view')->with($std);
    }

    public function Delete($id)
    {
        $user_data = studentmodel::find($id);
        if (!is_null($user_data)) {
            $user_data->delete();
            return redirect('studentview');
        } else {
            return redirect('studentview');
        }
    }
    public function Edit($id){
        $user_data = studentmodel::find($id);
        return view('update')->with(['user_data' => $user_data]);
    }
    public function update($id,Request $request) {
        $user_data = studentmodel::find($id);
        $user_data->name = $request['name'];
        $user_data->email = $request['email'];
        $user_data->password = $request['password'];
        $user_data-> save();
        return redirect('studentview');
    }  
}
