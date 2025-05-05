<?php

namespace App\Livewire;

use Livewire\Component;

class DispatchListening extends Component
{

    public function render()
    {
        return view('livewire.dispatch-listening')
        ->layout('components.layouts.with-navigation');
    }
}
