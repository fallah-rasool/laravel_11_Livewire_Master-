<div class="max-w-xl mx-auto px-5 m-5"> 

   
    <li>  
        <p style="display: inline">{{ $task }}</p>  
        <span 
        class="mx-5"
        
        style="color: {{ $isDone ? '#047542' : '#b05201' }}">  
            {{ $isDone ? 'isDone' : 'Pending...' }}  
        </span>  

        <button  
        class="my-5
        {{ $isDone ? ' text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2'
        :' text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900 '}}"
            {{-- style="color: {{ $isDone ? '#047542' : '#b05201' }}"   --}}
            wire:click='toggle'  >  
            {{ $isDone ? 'Uncheck' : 'Pending...' }}  
        </button>  
    </li>  

    
</div>
