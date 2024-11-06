<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TopbarMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Anda dapat menambahkan inisialisasi di sini jika diperlukan
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.topbar-menu'); // Pastikan view ini ada
    }
}