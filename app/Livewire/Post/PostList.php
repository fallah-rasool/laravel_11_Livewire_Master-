<?php

namespace App\Livewire\Post;


use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class PostList extends Component
{
    public $click= 0;

    public function clicked()
    {
        $this->click++;          
    } 

    #[On('post-created')]
    public function updatatePostList(): void
    {
        // $this->dispatchBrowserEvent('post-updated');
      //  dd('Post list updated');
      $this->dispatch('$refresh');
    }

    #[Computed]
    public function posts()
    {
        return Post::all();
    }

    public function togglePost( $id)
    {
        $post =Post::find($id);
        $post->update(
            [
                'is_published' => !$post->is_published,
            ]
        );
       $this->dispatch("post-updated.$post->id");
    }
    public function updateList()
    {
        $this->dispatch('$refresh');
    }

    public function render()
    {
        return view('livewire.post.post-list')
        ->layout('components.layouts.with-navigation');
    }
}
