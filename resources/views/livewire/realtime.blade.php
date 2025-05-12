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
        <label for="input-search">
            Search <span>*</span>
        </label>
        <br>
        <input
           class="p-2 text-green-900 border border-green-500 bg-green-50"
    
            {{-- wire:model.blur="query" --}}
            {{-- wire:model.live.debounce.500ms="query" --}}
            {{-- wire:model.live.throttle.1000ms="query" --}}
            wire:model.live.throttle="query"
            id="input-search"
            name="query"
            type="text"
        >
    </div>

</div>
