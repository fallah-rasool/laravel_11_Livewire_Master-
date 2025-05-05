<?php

namespace App\Livewire;

use Livewire\Component;

class IsMagic extends Component
{
    public bool $is_magic = false;

    public $username='';

    public function is_Magic()
    {
        $this->is_magic = !$this->is_magic;
    }
  
    public function render()
    {
        return view('livewire.is-magic')
        ->layout('components.layouts.with-navigation');

    }
}
