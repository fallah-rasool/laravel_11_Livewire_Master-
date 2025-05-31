<?php

namespace App\Livewire\Nesting;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('.::Nesting - Tasks::.')]
class TaskNesting extends Component
{
    public string $task='';
    public array $tasks=[];

    public function addTask ()
    {
        if( $this->task){
            $this->tasks[]=[
                'title'=> $this->task,
                'is_done'=> false    
            ];;
            $this->reset('task');
        }
    }

    #[On('toggle-task')]
    public function toggle(int $task_index)
    {
       
       $this->tasks[$task_index]['is_done'] = !$this->tasks[$task_index]['is_done'];
    }


    public function render()
    {
        return view('livewire.nesting.task-nesting')
        ->layout('components.layouts.with-navigation');
    }
}
