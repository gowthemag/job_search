<?php

namespace App\View\Components;

use Illuminate\View\Component;

class First extends Component
{
    public $data_t;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
      $this->data_t = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.first');
    }
}
