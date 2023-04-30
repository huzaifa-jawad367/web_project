<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class child extends Controller
{
    
    public function index(){

        return view('child');
    }
    
    public function register(Request $req){
    $req->validate([
     'missingtype'=>'required',  
     'name'=>'required',
     'age'=>'required|max:200',
     'gender'=>'required|in:male,female,other',
     'dateofbirth'=>'required|date',
     'birth_address'=>'required',
     'missing_address'=>'required',
     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
     'height' => 'required|max:250', 
     'blood' => 'required|in:A+,A-,B+,B-,AB+,AB+,O+,O-,', 
     'appearance' => 'required', 
     'family_info' => 'required', 
    
    ]);

    $path = $req->file('image')->store('uploads', 'public');

  
    echo "<pre>";
    print_r($req->all());
    echo "</pre>";

    }
}
