<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reportmodel;
use App\Models\Missingmodel;

class search extends Controller
{
    

    public function index(Request $req){
        $query = $req['search'] ?? '';
    if($req->select==1 ){ 
        $search = Missingmodel::where('name','=',$query)->get();
        $type=1;
     
    }

    else{
        $search = Reportmodel::where('name','=',$query)->get();
        $type=2;

    }
    $search=compact('search','type');

  

        
          
        return view('search')->with($search);
        
    }
    
 

  

    }






?>