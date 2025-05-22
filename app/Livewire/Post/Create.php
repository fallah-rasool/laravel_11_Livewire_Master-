<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public  $title='';
  
    public  $content='';
    
    public function rules()
    {
        return [
            'title' => ['required', 'min:5', 'string'],
            'content' => ['required', 'min:5', 'string'],
        ];
    }

    public function create (): void
    {        
        $this->validate();          
        $post =Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'is_published' => false,
        ]);
        $this->dispatch(
            event: 'notify', 
            message : $this->title .' Post created successfully!',           
        );        
        $this->dispatch(
            event: 'post-created',                     
        )->to(PostList::class);



        // $this->dispatchBrowserEvent('post-created');
   
        //create post 

        //dispatch its event 

    }
    public function render()
    {
        return view('livewire.post.create')
        ->layout('components.layouts.with-navigation');
    }
}
