<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{      
    public ?Post $post;

    #[Validate('required|min:5')]
    public $title = '';
    
    #[Validate('required|min:5')]
    public $content = '';

    public function setPost(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
    }

    public function store() 
    {
        sleep(5); // Simulate a long-running process
        $this->validate();
 
        Post::create($this->all());

        $this->reset();
    }

    
    public function update()
    {
        $this->validate();
        $this->post->update($this->only(['title', 'content']));
    }
}
