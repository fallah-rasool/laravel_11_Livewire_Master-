<div class="max-w-xl mx-auto px-5 m-5"> 


    <div>  
        <form class="max-w-sm mx-auto p-5 m-5">  
            <div class="mb-5">  
                <label>  
                    <span>   
                    Task <span style="color: red">*</span>    
                    </span>  
                </label>  
                <input type="text" wire:model='task'  
                    placeholder="Add your task here..."  
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5" />  
            </div>  
    
            <button type="button" wire:click.prevent='addTask'  
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">  
                Add Task  
            </button>  
            
            <button type="button" wire:click='clearTasks'   
                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">  
                Clear All  
            </button>  
        </form>  
    
        <h2 class="mt-5">Task List</h2>  
        <ul>  
            @foreach($tasks as $task)  
                <li class="bg-gray-100 border border-gray-300 p-2 rounded-lg mb-2">{{ $task }}</li>  
            @endforeach  
        </ul>  
    </div>  
    
    
</div>
