<?php

namespace App\Livewire;

use App\DataTransferObjects\Post\PostDto;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;
use Illuminate\Database\QueryException;

use App\Traits\WithUserInfo;

class Lifecycle extends Component
{  
    use WithUserInfo;

    public $creation_time;
    public $mount_called = 0;
    public $mount_id ;
    public $mount_request;

    public int $boot_time;
    public int $boot_calls = 0;

    public string $username = '';
    public string $email = '';
    public int $user_id = 1;
    public ?string $uuid;

    public  $post;
     

    public string $exception_message = '';

    public function mount(string $uuidOrTitle = null, string $caption = null): void
    {
      
        //on Component Create
        //executes only 1 time 
        $this->creation_time= time();

        $this->mount_called ++;
        // $this->mount_id= $id;
        if (Route::is('page.exception'))
        {
            // Post::find($this->postId);
           
            $post = Post::findOrFail(9999);         

        }
        else if (Route::is('page.uuid'))
        {
            $this->uuid = $uuidOrTitle;
        }
        else if (Route::is('page.post'))
        {
            // Initial Request
            $this->post = new PostDto($uuidOrTitle, $caption, 0);
        }

    }

    public function boot(): void
    {
        // executes on beginning of every request (initial, subsequently)

        $this->boot_time = time();
        $this->boot_calls++;
    }
  

    public function hydrate(): void
    {
        // Runs at the beginning of every "subsequent" request.
        if (is_array($this->post))
        {
        $this->post = PostDto::fromArray($this->post);
        }
    }

    /**
     * Dehydrate the data
     *
     * This method is called at the end of every single request
     * to convert the "post" property to an array.
     *
     * @return void
     */
    public function dehydrate(): void
    {

       // dd($this->post->toArray());
        // Runs at the end of every single request.
        $this->post = $this->post?->toArray();
    }

    public function magic(): void
    {
        $this->post->like();
    }

    public function exception($e, $stopPropagation) {

        $this->exception_message = $e->getMessage();
        // $this->exception_message ='This is error : '.$e->getMessage();
        $stopPropagation();


    }


    public function render()
    {
        return view('livewire.lifecycle')
        ->layout('components.layouts.with-navigation');
    }
}
