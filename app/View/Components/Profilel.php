<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Profilel extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
     public $name;
     public $age;
     public $gender;
     public $height;
     public $dob;
     public $blood;

     public $type;

     public $missing;

     public $birthAddress;
     public $missingAddress;

     public $appearance;

     public $family;

     public $image;




    public function __construct($id,$name,$age,$gender,$height,$dob,$blood,$type,$missing,$birthAddress,$missingAddress,$appearance,$family,$image)
    {
     $this->id = $id;   
     $this->name=$name;
     $this->age=$age;
     $this->gender=$gender;
     $this->height=$height;
     $this->dob=$dob;
     $this->blood=$blood;
     $this->type=$type;
     $this->missing=$missing;
     $this->birthAddress=$birthAddress;
     $this->missingAddress=$missingAddress;
     $this->appearance=$appearance;
     $this->family=$family;
     $this->image = $image;   



    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profilel');
    }
}
