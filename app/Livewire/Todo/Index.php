<?php

namespace App\Livewire\Todo;

use Livewire\Component;

class Index extends Component
{
    public $task = ''; 
    public $tasks = []; 
    public function mount()  
    {  
        $this->tasks = []; 
    }  
    public function addTask()  
    {     
        if ($this->task !== '') {  
            $this->tasks[] = $this->task; 
            $this->task = ''; 
        }  
    }  
    public function clearTasks()  
    {  
        $this->tasks = []; 
    }  

    public function render()
    {
        return view('livewire.todo.index');
    }
}
