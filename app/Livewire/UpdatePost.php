<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Post;

use App\Livewire\Forms\PostForm;

class UpdatePost extends Component
{  
    public PostForm $form;

    public function mount(Post $post)
    {
        $this->form->setPost($post);
    }
    public function save()
    {
        $this->form->update();
        return redirect()->route('posts.index');
    }
    public function render()
    {
        return view('livewire.update-post')
        ->layout('components.layouts.with-navigation');
    }
}
