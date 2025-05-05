<div class="max-w-xl mx-auto px-5 m-5" dir="rtl"> 

    <h1 class="text-xl font-bold mb-4">لیست وظایف</h1>

    <ul class="space-y-2">
        @foreach ($tasks as $task)
            <li class="flex justify-between items-center p-3 border border-gray-300 rounded">
                <span>{{ $task->title }}</span>
                <button 
                    wire:click="deleteTask({{ $task->id }})"
                    class="bg-red-600 text-white px-3 py-1 rounded"
                >
                    حذف
                </button>
            </li>
        @endforeach
    </ul>

    {{-- بخش Alpine برای نمایش پیام موفقیت --}}
    <div 
        x-data="{ message: '', show: false }" 
        x-show="show" 
        x-transition 
        x-on:taskDeleted.window="
            message = $event.detail.message;
            show = true;
            setTimeout(() => show = false, 3000);
        "
        class="fixed top-5 right-5 bg-green-600 text-white px-4 py-2 rounded shadow"
        style="display: none;"
    >
        <span x-text="message"></span>
    </div>


    <h1>----------------------------------------------------------</h1>
    {{-- <div x-data="{ message: '', show: false }">
        <button 
            @click="$dispatch('taskDeleted', { message: 'آزمایش موفقیت!' })"
            class="bg-blue-600 text-white px-3 py-1 rounded"
        >
            تست دستی dispatch
        </button>
    
        <div 
            x-show="show"
            x-transition
            x-on:taskDeleted.window="
                message = $event.detail.message;
                show = true;
                setTimeout(() => show = false, 3000);
            "
            class="fixed top-5 right-5 bg-green-600 text-white px-4 py-2 rounded shadow"
            style="display: none;"
        >
            <span x-text="message"></span>
        </div> --}}
    </div>
    

    <script src="//unpkg.com/alpinejs" defer></script>

</div>
