<div class="max-w-xl mx-auto px-5 m-5"> 

    <h1 class="p-5 mb-3">{{ $count }}</h1>
 

    <button type="button"
    wire:click="increment"
    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">+</button>

     
    <button type="button"
     wire:click="decrement"
    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">-</button>

    @script
        {{-- <script>
        console.log('this is goood .....');
        setInterval(tack, 1000);
        let isPing =true;
        function tack(){
            let content = (isPing ? 'Ping' : 'pong');
            console.log(`[posts-create] ${content}`);
        $wire.title = content;
            isPing = !isPing;
        }
        </script> --}}
    @endscript

</div>
