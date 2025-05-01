<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Comment;

class PostComments extends Component
{
    public Post $post;
    public string $newComment = '';

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function addComment()
    {
        $this->validate([
            'newComment' => 'required|min:2',
        ]);

        $this->post->comments()->create([
            'body' => $this->newComment,
        ]);

        $this->newComment = '';
        session()->flash('message', 'نظر با موفقیت ثبت شد!');
    }

    public function render()
    {
        return view('livewire.post-comments', [
            'comments' => $this->post->comments()->latest()->get(),
        ])
        ->layout('components.layouts.with-navigation');
        
    }

}
