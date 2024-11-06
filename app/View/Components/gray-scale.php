<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GrayScale extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.gray-scale');
    }
}