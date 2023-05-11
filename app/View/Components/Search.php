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
    public $id;
    public $dob;




    public function __construct($name ,$age ,$gender ,$id,$dob)
    {
        
     $this->name=$name;
     $this->age=$age;
     $this->gender=$gender;
     $this->id=$id;
     $this->dob=$dob;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.search');
    }
}
