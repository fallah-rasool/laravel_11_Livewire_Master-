<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Validate;

class Dashbord extends Component
{
  
    public  $title='';
  
    public  $content='';
    
    public function rules()
    {
        return [
            'title' => ['required', 'min:5', 'string'],
            'content' => ['required', 'min:5', 'string'],
        ];
    }

    public function create (): void
    {        
        $this->validate();       
        dd();

        //create post 

        //dispatch its event 

    }

    public function render()
    {
        return view('livewire.pages.dashbord')
        ->layout('components.layouts.with-navigation');
    }
}
