<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\PostForm;

class PostCreate extends Component
{
    public PostForm $form; 

    public function store()
    {
      $ttt=  $this->validate();     
       $this->form->store(); 

       $this->reset(); 
       
       // return $this->redirect('/posts-index');
    } 

    public function render()
    {
        return view('livewire.post-create')
        ->layout('components.layouts.with-navigation');
    }
}
