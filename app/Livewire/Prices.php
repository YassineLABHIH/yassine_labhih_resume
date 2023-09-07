<?php

namespace App\Livewire;

use Livewire\Component;

class Prices extends Component
{

    public String $show_price_card = 'hidden';

    public $subscription_prices = false;
    
    public function render()
    {
        return view('livewire.prices');
    }
}
