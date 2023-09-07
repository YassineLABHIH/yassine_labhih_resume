<?php

namespace App\Livewire;

use Livewire\Component;

class Experiences extends Component
{
    public String $experience_card1 = 'hidden';
    public String $experience_card2 = 'hidden';
    public String $experience_card3 = 'hidden';
    public String $experience_card4 = 'hidden';
    public String $experience_card5 = 'hidden';
    public String $experience_card6 = 'hidden';
    public function render()
    {
        return view('livewire.experiences');
    }
}
