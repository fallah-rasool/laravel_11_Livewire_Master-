<?php

namespace App\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class Post extends Component
{
    public  $posts;

    public function mount()
    {
       $this->posts = ModelsPost::all();      
    }

    public function render()
    {
        return view('livewire.post')
        ->layout('components.layouts.with-navigation');
    }
}
