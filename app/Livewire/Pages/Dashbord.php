<?php

namespace App\Livewire\Pages;

use App\Livewire\Post;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Dashbord extends Component
{
  


    public function render()
    {
        return view('livewire.pages.dashbord')
        ->layout('components.layouts.with-navigation');
    }
}
