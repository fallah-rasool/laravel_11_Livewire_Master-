<div class="max-w-xl mx-auto px-5 m-5" dir="rtl"> 

    <div class="p-5">

        <span class="px-5 mx-2 "> MagicActions :</span>
  
        <input type="text" 
        class="bg-green-50 border border-green-500 text-green-900 p-2 mx-5"
        wire:keydown.enter='MagicActions($event.target.value)'>
        
    </div>

    <div class="p-5">
        <span class="mx-2 ">keydown.shift.ente : </span>
        <input class="bg-green-50 border border-green-500 text-green-900 p-2"
         wire:keydown.shift.enter="MagicActions($event.target.value)">
    </div>

    <div>
        {{ $magic }}
    </div>

 

</div>
