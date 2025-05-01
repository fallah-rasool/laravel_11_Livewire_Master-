<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class PostWelcome extends Component
{
    public string $email='';

    public function mount($email) :void
    {
            $parts= explode('@', $email);
            $this->email = $parts[0];
    }

    public function render()
    {
        return view('livewire.post-welcome')
        ->layout('components.layouts.with-navigation');
    }
}
