<div class="max-w-xl px-5 m-5 mx-auto" > 
    {{-- <div class="flex justify-between" wire:key="post-list-{{ $post['id']  }}"> --}}        
      
        {{ $post->id }} <br>
        {{ $post->title }} <br>
        {{ $post->content }} <br>
        {{ time() }}   <br>
        {{ $post->is_published ? 'published':'Draft' }}  <br>      
       
        
         <button  wire:click.prevent="delete"
  
         class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
            delete Post
         </button>
         <br>
         <button wire:click.prevent="$parent.clicked()">
            clicked
         </button>
        <hr> <br>
          
</div>
