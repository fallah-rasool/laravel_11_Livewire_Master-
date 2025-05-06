<div class="max-w-xl mx-auto px-5 m-5" dir="rtl"> 

    <li style="display: flex;justify-content: space-between">
        {{ $task_value}}
        <button
            wire:confirm="Are you Delete this Task ???"
            wire:click='$parent.deleteTask("{{ $task_key }}")'
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
            >
                Delete
        </button>
    </li>
</div>
