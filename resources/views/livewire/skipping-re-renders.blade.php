<div class="max-w-xl mx-auto px-5 m-5" dir="rtl"> 

    <div style="display: flex;">
        <button wire:click='liksUs()'

         class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
        
        > liks   </button>


        <p class=" px-5 mx-5">last Update  {{ now()->format('H:i:s') }}            </p>
    </div>
</div>
