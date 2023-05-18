<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reportmodel;
use App\Models\Missingmodel;

class dashboard extends Controller
{
    public function index(){

        $found = Reportmodel::all();
        $missing = Missingmodel::all();



        $data2 = compact('found','missing'); 
        return view('dashboard')->with($data2);
        
    }
}
