<div class="max-w-xl px-5 m-5 mx-auto"> 

    <li >
        <p>{{  $task_index }}</p>
        <p>{{ $title }}
        </p>
        <div class="flex justify-between">
            
            <p>
             status : {{ $is_done ?'Done !':'panding ....' }}</p>
             
             <button
             class=" {{ $is_done ?' focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 ':'text-white bg-yellow-400 px-5 py-2.5 me-2 mb-2 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm' }} "
             wire:click='toggle()'
             >status click</button>
             
        </div>
        <hr>
    </li>
</div>
