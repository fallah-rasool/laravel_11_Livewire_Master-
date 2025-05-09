<?php

namespace App\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class ShowAllPost extends Component
{
    public  $posts;

    public function mount()
    {
        $this->posts = ModelsPost::all();       
    }
    public function render()
    {
        return view('livewire.show-all-post')
        ->layout('components.layouts.with-navigation');
    }
}
