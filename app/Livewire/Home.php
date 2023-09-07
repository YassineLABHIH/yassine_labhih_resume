<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public String $banner = 'show';
    public function render()
    {
        return view('livewire.home');
    }
}
