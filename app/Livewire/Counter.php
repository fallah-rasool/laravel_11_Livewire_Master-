<?php

namespace App\Livewire;
use Livewire\Attributes\Layout;
use Illuminate\Http\Response;

use Livewire\Component;

// #[Layout('components.layouts.with-navigation')]
class Counter extends Component
{
    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
    // #[Layout('components.layouts.with-navigation')]
    public function render()
    {
        return view('livewire.counter')
        ->layout('components.layouts.with-navigation')
        ->response(function(Response $response){
            $response->header('XXXXXXXX-Rasool-Secret', 'cod ...');
        });

    }
}
