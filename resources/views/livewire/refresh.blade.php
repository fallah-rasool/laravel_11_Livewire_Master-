<div class="max-w-xl mx-auto px-5 m-5"> 
    <div>
        <h1>        This is Export Page    </h1>    <hr>
        <div class="center-page">                   
    <h2 class=" my-5">   Current Status :
                @empty($downloadable_at)
                    <strong class="text-white bg-red-800 px-3 py-2">
                        Not Requsted
                    </strong>
                @else
                    @if (time()>=$downloadable_at)
                        <strong class="text-white bg-green-800 px-3 py-2"> Redy To Download</strong>
                    @else
                    <strong class="text-white bg-yellow-800 px-3 py-2"> Pending</strong>
                    @endif
                @endempty
            </h2>        
            <hr class=" my-5">
            <h3  >           
                 <strong >Current Time : </strong> {{ time() }}    <br>
                <strong  >downloadable_at : </strong> {{ $downloadable_at }}
            </h3>   
            <hr class=" my-5">
             <h1  >
                @if ($downloadable_at)
                 {{ \carbon\Carbon::createFromTimestamp($downloadable_at)->diffForHumans() }}
                @endif
            </h1>       
             <hr class=" my-5">
            @empty($downloadable_at)
                <form wire:submit='Export'  wire:confirm=' Are you  ??? '>
                    <button type="submit"
                    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"  >
                        Export my Data
                    </button>
                </form>
              @else
                @if (time()>=$downloadable_at)
                    <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                        Download   my Data
                    </button>
                @else
                <div>
                    <span>refresh Using Livewire  </h1>
                        <button wire:click="$refresh"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 " >
                           Refresh  Status
                        </button>
                </div>
                <br>
                <div>
                    <span>
                        Refresh  Using Alpaine
                    </h1>
                        <button x-on:click="$wire.$refresh" 
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">
                        Refresh  Using Alpaine
                        </button>
                </div>

                @endif
            @endempty
        </div>
    </div>
    

    
</div>
