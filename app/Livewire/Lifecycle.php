<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Lifecycle extends Component
{
    public $creation_time;
    public $mount_called = 0;
    public $mount_id ;
    public $mount_request;

    public int $boot_time;
    public int $boot_calls = 0;

    public function mount(string $id = null)
    {
      
        //on Component Create
        //executes only 1 time 
        $this->creation_time= time();

        $this->mount_called ++;
        $this->mount_id= $id;

    }

    public function boot(): void
    {
        // executes on beginning of every request (initial, subsequently)

        $this->boot_time = time();
        $this->boot_calls++;
    }

    public function render()
    {
        return view('livewire.lifecycle')
        ->layout('components.layouts.with-navigation');
    }
}
