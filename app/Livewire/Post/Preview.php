<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class Preview extends Component
{
    public Post $post;

    public function mount(Post $post): void
    {
        $this->post = $post;
    }

    #[On('post-updated.{post.id}')]
    public function refreshPost()
    {
        $this->dispatch('$refresh');

    }
    public function delete()
    {
       $this->post->delete();
       $this->dispatch(event:'deleted');
       
    }
    public function render()
    {
        return view('livewire.post.preview')
        ->layout('components.layouts.with-navigation');
    }
}
