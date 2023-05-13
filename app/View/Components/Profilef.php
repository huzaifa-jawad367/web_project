<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Profilef extends Component
{
 
    public $id;
     public $name;
     public $age;
     public $gender;
    
     public $dob;
     public $address;


     public $addressFound;

     public $appearance;
     public $height;

     public $memory;
     public $otherInfo;

     public $image;




    public function __construct($id,$name,$age,$gender,$dob,$address,$addressFound,$appearance,$height,$memory,$otherInfo,$image)
    {
     $this->id = $id;   
     $this->name=$name;
     $this->age=$age;
     $this->gender=$gender;
     $this->height=$height;
     $this->dob=$dob;
     $this->address=$address;
     $this->addressFound=$addressFound;
     $this->appearance=$appearance;
     $this->memory=$memory;
     $this->otherInfo=$otherInfo;
     $this->image = $image;   



    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profilef');
    }
}
