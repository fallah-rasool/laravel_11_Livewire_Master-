<?php

namespace App\Livewire;

use Livewire\Component;

class ParentMy extends Component
{

    public $parent='parent';

    public function update_child(){

        $this->parent ='child';

    }
    public function render()
    {
        return view('livewire.parent-my')
        ->layout('components.layouts.with-navigation');
    }
}
