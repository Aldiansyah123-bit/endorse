<?php

namespace App\View\Components;

use App\Models\Kontak;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $dt =  Kontak::count();
        return view('layouts.admin', compact('dt'));
    }
}
