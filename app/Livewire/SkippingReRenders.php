<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Attributes\Renderless;

class SkippingReRenders extends Component
{  
    
    // #[Renderless]
    public function liksUs()
    {
        Log::error('some One  liks Us ');
        $this->skipRender();
    }


    public function render()
    {
        return view('livewire.skipping-re-renders')
        ->layout('components.layouts.with-navigation');
    }
}
