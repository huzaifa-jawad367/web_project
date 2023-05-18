<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Missingmodel;
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
     'gender'=>'required|in:M,F,O',
     'dateofbirth'=>'required|date',
     'birth_address'=>'required',
     'missing_address'=>'required',
     'missing_time'=>'required',
     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
     'height' => 'required|max:250', 
     'blood' => 'required|in:A+,A-,B+,B-,AB+,AB-,O+,O-', 
     'appearance' => 'required', 
     'family_information' => 'required', 
    
    ]);

    $file = $req->file('image');
    $extension = $file->getClientOriginalExtension();
    

    $report=new Missingmodel;
    $report->missing_type=$req['missingtype'];
    $report->name=$req['name'];
    $report->age=$req['age'];
    $report->gender=$req['gender'];
    $report->date_of_birth=$req['dateofbirth'];
    $report->birth_address=$req['birth_address'];
    $report->missing_address=$req['missing_address'];
    $report->missing_time=$req['missing_time'];
     $report->height_when_missing=$req['height'];
    $report->blood_type=$req['blood'];
    $report->appearance=$req['appearance'];
    $report->family_information=$req['family_information'];
    $report->image=$extension;
    
    $report->save();
 //    Get the uploaded data id
    $id = $report->missing_id;
    $report =null;
  
 
 

 // // Store the file with a custom name
 $file->storeAs('public/lost', "$id.$extension");
 return view("submitted");
  
   
 
     }
}
