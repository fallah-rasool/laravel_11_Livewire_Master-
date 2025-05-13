<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Notification extends Component
{
    public $message = '';

    public bool $is_visible = false;

    #[On('post-created')]
    public function show()
    {
        $this->is_visible = true;
        $this->message='new post created';
    }

    public function render()
    {
        return view('livewire.notification')
        ->layout('components.layouts.with-navigation');
    }
}
