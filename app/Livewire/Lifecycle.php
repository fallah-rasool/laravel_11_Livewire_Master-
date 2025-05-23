<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Lifecycle extends Component
{
    public $creation_time;
    public $mount_called = 0;
    public $mount_id ;
    public $mount_request;

    public function mount(string $id = null,Request $request)
    {
      
        //on Component Create
        //executes only 1 time 
        $this->creation_time= time();

        $this->mount_called ++;
        $this->mount_id= $id;
        $this->mount_request= $request;

    }

    public function render()
    {
        return view('livewire.lifecycle')
        ->layout('components.layouts.with-navigation');
    }
}
