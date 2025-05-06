<?php

namespace App\Livewire;

use Livewire\Component;

class TaskChild extends Component
{

    public string $task_key;
    public string $task_value;

    public function mount($key_task ,$value_task)
    {
        $this->task_key =$key_task;
        $this->task_value= $value_task;
    }

    public function render()
    {
        return view('livewire.task-child');
    }
}
