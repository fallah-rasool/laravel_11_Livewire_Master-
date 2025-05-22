<div class="" > 

    <h1>PostList</h1>
    <h1>----------------------------------------------------------------------------</h1>
    <p 
    {{-- x-on:deleted.window="console.log('deleted called form ')"  --}}
    x-on:notify.window="console.log($event.detail.message)" >
    last update :{{ time() }}</p>
    <br>
    {{ $click }}
    <br

       @foreach ($this->posts() as $post)
       
            <div wire:key="post-item-rapper-{{ $post->id }}"  class="bg-white border-b border-gray-200 ">
                
                {{-- <div class="flex justify-between" wire:key="post-list-{{ $post['id']  }}">
                    
                    <h1>{{ $post['id'] }}</h1>
                    <h1>{{ $post['title'] }}</h1>
                    <p>{{ $post['content'] }}</p>
                </div> --}}
             
                <button     
               
                wire:click.prevent="togglePost({{ $post->id }})"
                
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    toggle Post Status
                </button>
               
                
                <livewire:post.preview  
                        wire:key="post-list-{{ $post->id }}"
                        :post='$post'  
                        @deleted="updateList"
                >
                <hr>
             
            </div>
       @endforeach
</div>
