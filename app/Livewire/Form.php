<?php

namespace App\Livewire;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Form extends Component
{
    #[Validate(['required', 'string'])]
   public string $fullname = '';

    #[Validate(['required','email'])]
    public string $email = '';
    public function addfullName(): void
    {
        $this->validate();
        $this->reset();
    }

    public function render()
    {
        return view('livewire.form')
        ->layout('components.layouts.with-navigation');

    }
}
