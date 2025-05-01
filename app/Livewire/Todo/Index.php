<?php

namespace App\Livewire\Todo;
use Livewire\Attributes\Title;

use Livewire\Component;

// #[Title('Create Post')] 
class Index extends Component
{
    public $task = ''; // متغیر برای ذخیره تسک جدید  
    public $tasks = []; // آرایه برای ذخیره لیست تسک‌ها  

    public function mount()  
    {  
        $this->tasks = []; // مقداردهی اولیه آرایه tasks  
    }  

    public function addTask()  
    {  
        // اطمینان از اینکه تسک خالی نیست  
        if ($this->task !== '') {  
            $this->tasks[] = $this->task; // افزودن تسک جدید به آرایه  
            $this->task = ''; // پاک کردن input بعد از افزودن تسک  
        }  
    }  

    public function clearTasks()  
    {  
        $this->tasks = []; // پاک کردن تمامی تسک‌ها  
    }  
    // #[Title('Create Post')] 
    public function render()
    {
        return view('livewire.todo.index')
        ->extends('layouts.master')
        ->section('app')
        ->title('Create Post'); 
      
        
    }
}
