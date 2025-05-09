<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class AllPosts extends Component
{
    public function render()
    {
        return view('livewire.all-posts', [
            'posts' => Post::latest()->get(),
        ])
        ->layout('components.layouts.with-navigation');
    }
}
