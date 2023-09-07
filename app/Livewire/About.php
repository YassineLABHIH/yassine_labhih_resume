<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public String $about_description = 'hidden';
    public String $age;
    public function render()
    {
        $dateOfBirth = "30-10-1991";
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));

        $this->age = $diff->format('%y');
        
        return view('livewire.about');
    }
}
