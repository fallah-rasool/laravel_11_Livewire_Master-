<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Notification extends Component
{
    public $message = '';

    public bool $is_visible = false;

    // #[On('notify')]
    // public function show( string $message): void
    // {
    //     $this->is_visible = true;
    //     $this->message= $message;
    //    $this->dispatch('hide-notification')->self(); 
    // }

    public function render()
    {
        return view('livewire.notification')
        ->layout('components.layouts.with-navigation');
    }
}
