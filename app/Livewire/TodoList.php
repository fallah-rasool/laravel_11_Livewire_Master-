<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{

    public  $tasks=[];

    public function addTask(string $Task)
    {
       $this->tasks[md5($Task)] = $Task;
    }
    
    public function deleteTask(string $key)
    {
        unset($this->tasks[$key]);
    }


    public function render()
    {
        return view('livewire.todo-list')
        ->layout('components.layouts.with-navigation');
    }
}
