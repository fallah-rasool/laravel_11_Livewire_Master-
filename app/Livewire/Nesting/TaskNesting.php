<?php

namespace App\Livewire\Nesting;

use Livewire\Component;
use Livewire\Attributes\Title;

use function Laravel\Prompts\progress;

#[Title('.::Nesting - Tasks::.')]
class TaskNesting extends Component
{

    public string $task='';
    public array $tasks=[];

    public function mount()
    {
       
    }

    public function addTask ()
    {
        if( $this->task){

            $this->tasks[] = $this->task;
            $this->reset('task');
        }

    }

    public function render()
    {
        return view('livewire.nesting.task-nesting')
        ->layout('components.layouts.with-navigation');
    }
}
