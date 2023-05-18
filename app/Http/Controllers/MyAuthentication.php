<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use App\Models\Reportmodel;
use App\Models\Missingmodel;

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
        $user->password = Hash::make($request->password);
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

    public function login_user(Request $request) {
        // return $request;
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'The password is not correct.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }

    public function dashboard() {
        $found = Reportmodel::all();
        $missing = Missingmodel::all();
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
            $data2 = compact('found','missing', 'data');
        }
        return view('dashboard')->with($data2);
    }

    public function index(){

        $found = Reportmodel::all();
        $missing = Missingmodel::all();



        $data2 = compact('found','missing'); 
        return view('dashboard')->with($data2);
        
    }

    public function logout() {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/');
        }
        return redirect('/');
    }
}


