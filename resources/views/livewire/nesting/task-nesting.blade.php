<div class="max-w-xl px-5 m-5 mx-auto" > 

    <livewire:nesting.task.stat 
    :tasks="$tasks"
    /> 

    <hr>
    <br>
    <form wire:submit.prevent="addTask">
        <label for="">task :</label>
        <input type="text" name="task" id=""        
        class="p-2 text-green-900 border border-green-500 bg-green-50"
        wire:model='task'>
    </form>
    <hr> 
    <ul>
        @foreach ($tasks as $taskIndex =>$task)
            {{-- <x-task.item :title="$task" />         --}}
            {{-- <x-task.item :$task />         --}}
            <livewire:nesting.task-item  
            :task="$task"
            :task_index="$taskIndex"
            wire:key="task-item{{ $loop->index }}"
            />
        @endforeach
    </ul>   
    <ul>
        @foreach ($tasks as $taskIndex => $task)
        
        {{-- <livewire:nesting.task-item  
        :task="$task"
        :task_index="$taskIndex"
        wire:key="bost-task-item{{ $loop->index }}"
        /> --}}
            <li>{{ json_encode($task) }}</li>
        @endforeach
    </ul>   
</div>
