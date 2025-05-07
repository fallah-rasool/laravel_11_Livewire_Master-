<?php

namespace App\Livewire;

use App\Models\Post as ModelsPost;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Post extends Component
{
    public  $posts;

    public function mount()
    {
       $this->posts = ModelsPost::all();      
    }

    // 3
    public function deletePost($id)
    {
        if (! Auth::user()->isAdmin) {
            abort(403);
        } 
        $this->delete($id); 
    } 

    
    protected  function delete($postId)  
    {
        $post = Post::find($postId);
 
        $post->delete();
    } 


    // public function delete($id)
    // {
    //     // 2
    //     if (! Auth::user()->isAdmin) { 
    //         abort(403);
    //     } 

    //     //1
    //     $post = ModelsPost::find($id); 
       
    //     $post->delete();

    // }


    public function render()
    {
        return view('livewire.post')
        ->layout('components.layouts.with-navigation');
    }
}
