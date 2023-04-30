<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reportmodel;

class report extends Controller
{
    

    public function index(){

        return view('report');
    }
    
    public function register(Request $req){
    $req->validate([

     'name'=>'required',
     'age'=>'required|max:200',
     'gender'=>'required|in:male,female,other',
     'dateofbirth'=>'required|date',
     'address'=>'required',
     'address_found'=>'required',
     'appearance' => 'required', 
     'height' => 'required|max:250', 
     'memory' => 'required', 
     'other_info' => 'required',
     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',  
    
    ]);

   $report=new Reportmodel;
   $report->name=$req['name'];
   $report->age=$req['age'];
   $report->gender=$req['gender'];
   $report->date_of_birth=$req['dateofbirth'];
   $report->address=$req['address'];
   $report->address_found=$req['address_found'];
   $report->appearance=$req['appearance'];
   $report->height=$req['height'];
   $report->memory=$req['memory'];
   $report->other_info=$req['other_info'];
   $report->save();

  print_r($req->all());
  

    }





}
?>