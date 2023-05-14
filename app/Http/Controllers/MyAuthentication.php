<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyAuthentication extends Controller
{
    public function login() {
        return view("login");
    }

    public function registeration() {
        return view("signup");
    }

    public function registerUser(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12',
            'cnic'=>'required',
            'password_confirmation'=>'required|same:password',
            'date_of_birth'=>'required',
            'gender'=>'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->cnic = $request->cnic;
        $user->date_of_birth = $request->date_of_birth;
        $user->gender = $request->gender;
        $user->phone_num = $request->phone;
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something went wrong');            
        }
    }
}
