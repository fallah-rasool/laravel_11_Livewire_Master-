<div class="max-w-xl px-5 m-5 mx-auto" > 
    <form wire:submit.prevent="addTask">
        <label for="">task :</label>
        <input type="text" name="task" id=""        
        class="p-2 text-green-900 border border-green-500 bg-green-50"
        wire:model='task'>
    </form>
    <hr>    
    @foreach ($tasks as $task)
        {{-- <x-task.item :title="$task" />         --}}
        <x-task.item :$task />        
    @endforeach
</div>
