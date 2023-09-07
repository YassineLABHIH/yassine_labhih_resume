<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public String $color = 'indigo';
    public function render()
    {
        return view('livewire.navigation');
    }
}
