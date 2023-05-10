<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Child extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $age;
    public $img;
    public $gender;
    public $missingTime;
    public function __construct($name,$age,$img,$gender,$missingTime)
    {
        $this->name=$name;
        $this->age=$age;
        $this->img=$img;
        $this->gender=$gender;
        $this->missingTime=$missingTime;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.child');
    }
}
