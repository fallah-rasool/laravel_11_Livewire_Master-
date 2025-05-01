<?php

namespace App\Livewire;

use Livewire\Component;

class CounterAlpine extends Component
{
    public $count = 0;
    public function increment()
    {
        $this->count++;
    }
    public function Decreasing ()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter-alpine');
    }
}
