<?php

namespace App\Livewire\Nesting;

use Livewire\Component;

class NestingDashboard extends Component
{
    public function render()
    {
        return view('livewire.nesting.nesting-dashboard')
        ->layout('components.layouts.with-navigation');
    }
}
