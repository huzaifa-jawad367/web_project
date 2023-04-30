<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class volunteer extends Controller
{
    
public function index(){

    return view('volunteer');
}

public function register(Request $req){
$req->validate([
 'cnic'=>'required',  
 'name'=>'required',
 'email'=>'required|email',
 'address'=>'required',
 'phone'=>'required',
 'gender'=>'required',
 'dateofbirth'=>'required',
 'password'=>'required',
 'confirm_password'=>'required|same:password',


]);

echo "<pre>";
$req->all();

}


}
