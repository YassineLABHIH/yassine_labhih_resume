<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Navigation extends Component
{
    public String $color = 'indigo';

    public function changeColor(Request $request){

        $request->session()->put('color', $this->color);

        $this->color = session('color');


    }
    public function render()
    {
        return view('livewire.navigation');
    }
}
