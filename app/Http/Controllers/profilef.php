<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reportmodel;

class profilef extends Controller
{
    

    public function index(Request $req){


        $user = Reportmodel::find($req['id']);
        $user = compact('user'); 
        // echo "<pre>";
        // print_r($user);
  
          
        return view('profilef')->with($user);
        
    }
    
 

  

    }






?>