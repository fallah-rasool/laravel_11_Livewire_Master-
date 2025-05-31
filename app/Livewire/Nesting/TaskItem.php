<?php

namespace App\Livewire\Nesting;

use Livewire\Component;

class TaskItem extends Component
{  
   public int $task_index; 
   public string $title;
   public bool $is_done ;

   public function mount(array $task)
   {
        $this->title= $task['title'];
        $this->is_done= $task['is_done'];        
   }

   public function toggle()
   {
   // dd( $this->task_index);
        $this->dispatch('toggle-task', task_index: $this->task_index);
        $this->is_done =! $this->is_done ;
   }

    public function render()
    {
        return view('livewire.nesting.task-item')
        ->layout('components.layouts.with-navigation');
    }
}
