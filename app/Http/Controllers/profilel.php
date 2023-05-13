<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Missingmodel;

class profilel extends Controller
{
    

    public function index(Request $req){

        $user = Missingmodel::find($req['id']);
        $user = compact('user'); 

       
        return view('profilel')->with($user);
        
    }
    
 

  

    }






?>