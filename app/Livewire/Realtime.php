<?php

namespace App\Livewire;

use Livewire\Component;

class Realtime extends Component
{

    public  $query ='';

    public function render()
    {
        return view('livewire.realtime')
        ->layout('components.layouts.with-navigation');
    }
}
