<div class="max-w-xl mx-auto px-5 m-5" dir="rtl"> 

    <h1>
        ارسال Propertie  به Actions
    </h1>
    <h1>-----------------------------------------------------------------------------------</h1>
 
    <div wire:submit.prevent>
        <label for="task"> task : </label>   
        <input 
        class="bg-green-50 border border-green-500 text-green-900 p-2"
        type="text" 
        name="task"
         id="task" 
        wire:keydown.enter='addTask($event.target.value)'  >
        </div >

        <ul>
            @foreach ( $tasks as $keytask => $valuetask )
            {{-- <li wire:key='$key'>
                {{ $value }}
            </li> --}}
            <livewire:TaskChild
             wire:key=' {{ $keytask  }}'    key_task="{{ $keytask }}"   value_task="{{ $valuetask }}"
             />

            @endforeach
        </ul>


        
</div>
