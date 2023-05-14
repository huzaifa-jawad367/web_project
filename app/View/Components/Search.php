<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Search extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $age;
    public $gender;
    public $image;
    public $dob;
    public $type;

    public $id;


    public function __construct($id,$name ,$age ,$gender ,$image,$dob,$type)
    {
     $this->id=$id;   
     $this->name=$name;
     $this->age=$age;
     $this->gender=$gender;
     $this->image=$image;
     $this->dob=$dob;
     $this->type=$type;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.search');
    }
}
