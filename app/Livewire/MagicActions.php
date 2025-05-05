<?php

namespace App\Livewire;

use Livewire\Component;

class MagicActions extends Component
{
    public string $magic;
    public function MagicActions($event)
    {      
        $this->magic = $event ;
    }

    public function render()
    {
        return view('livewire.magic-actions')
        ->layout('components.layouts.with-navigation');
    }
}
