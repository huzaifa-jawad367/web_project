<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reportmodel;
use App\Models\Missingmodel;

class home extends Controller
{
    public function index(){

        $found = Reportmodel::all();
        $missing = Missingmodel::all();



        $data = compact('found','missing'); 
        return view('home')->with($data);
        
    }
    
}
