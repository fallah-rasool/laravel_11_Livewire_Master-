<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Exception;

class Lifecycle extends Component
{  
    public $creation_time;
    public $mount_called = 0;
    public $mount_id ;
    public $mount_request;

    public int $boot_time;
    public int $boot_calls = 0;

    public string $username = '';

    public string $email = '';

    public int $user_id = 1;

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

    public function updating(string $property, mixed $value): void
    {

        dd($property, $value);
        
        if ($property === 'user_id')
        {
            throw new Exception('You can not change User ID');
        }

        if ($property === 'username' && strlen($value) <= 3)
        {
            $this->addError('username', 'Username must be at least 3 characters long');
        }
        else
        {
            $this->resetErrorBag('username');
        }
    }

    public function updated(string $property): void
    {
        if ($property === 'username')
        {
            $this->username = trim(strtoupper($this->username));
        }
    }
    public function updatingEmail(mixed $value): void
    {
        if (strlen($value) <= 3)
        {
            $this->addError('email', 'Email must be at least 3 characters long');
        }
        else
        {
            $this->resetErrorBag('email');
        }
    }

    public function updatedEmail(): void
    {
        $this->email = trim(strtolower($this->email));
    }




    public function render()
    {
        return view('livewire.lifecycle')
        ->layout('components.layouts.with-navigation');
    }
}
