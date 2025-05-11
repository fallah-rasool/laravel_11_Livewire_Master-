<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Livewire\Forms\PostForm;

class CreatePost extends Component
{
    public PostForm $form; 
    public function save()
    {
      $ttt=  $this->validate();     
       $this->form->store(); 
       // return $this->redirect('/post');
    }   
    public function render()
    {
        return view('livewire.create-post')
        ->layout('components.layouts.with-navigation');
    }
}
