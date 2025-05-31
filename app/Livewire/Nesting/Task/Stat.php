<?php

namespace App\Livewire\Nesting\Task;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Stat extends Component
{

    #[Reactive]
    public array $tasks ;
    public function render()
    {
        return view('livewire.nesting.task.stat')
        ->layout('components.layouts.with-navigation');
    }
}
