<div class="max-w-xl px-5 m-5 mx-auto" dir="lrt"> 
    
    <h1>realtime</h1>
    <h1>----------------------------------------</h1>




    <h2>
        Search
    </h2>
    <p>
        You're looking for: {{ $query }}
    </p>
    <div>
        {{-- <label for="input-search">
            Search <span>*</span>
        </label>
        <br> --}}
        {{-- <input
           class="p-2 text-green-900 border border-green-500 bg-green-50"
    
            {{-- wire:model.blur="query" --}}
            {{-- wire:model.live.debounce.500ms="query" --}}
            {{-- wire:model.live.throttle.1000ms="query" --}}
           {{--     wire:model.live.throttle="query"
            id="input-search"
            name="query"
            type="text"
        >
        resources\views\components\form\input\idex.blade.php
         --}}
         <x-form.input
                key="search"
                label="Search"
                model="query"
                name="queryname"
                type="text"
             />

    </div>


    <div>
        <br>        <br>
        <h1>-----------------------------------------------------------------------------------</h1>
        <div class="flex justify-between" dir="rtl">
            
            <h1>ساخت کامپوننت پیشرفته‌تر با Alpine و Livewire  </h1>
            <h1>Custom form controls</h1> 
        </div>
        
        {{-- <div x-data="{ count: 0 }" class="flex justify-between p-5">
            
            <button 
    
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2" 
            x-on:click="count--">-</button>
         
            <span x-text="count"
            class="text-lg"
            ></span>
         
            <button x-on:click="count++"
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2"  
            >+</button>
        </div> --}}


        <x-form.count wire:model='count' />
        
    </div>

</div>
