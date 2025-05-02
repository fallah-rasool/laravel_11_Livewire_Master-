<?php

namespace App\Livewire;

use Livewire\Component;

class Refresh extends Component
{
    public int $downloadable_at;

    public function Export()
    {
        $this->downloadable_at = now()->addSecond(10)->timestamp;
    }

    public function render()
    {
        return view('livewire.refresh')
        ->layout('components.layouts.with-navigation');
    }
}
