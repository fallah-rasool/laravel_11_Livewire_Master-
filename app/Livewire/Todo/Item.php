<?php

namespace App\Livewire\Todo;

use Livewire\Component;

class Item extends Component
{
    public $task; // نام تسک  
    public $isDone = false; // وضعیت انجام شده یا نشده تسک  

    // متد برای تغییر وضعیت انجام شده/نشده  
    public function toggle()  
    {  
        $this->isDone = !$this->isDone; // تغییر وضعیت  
    }  


    public function render()
    {
        return view('livewire.todo.item');
    }
}
