<div class="max-w-xxl mx-auto px-2 m-5" dir="ltr"> 


    <h1 dir="ltr" class="my-2"> <strong> Child  Component</strong></h1>

    <div class="flex  justify-between">

        <strong class=""> update Properties Parent by Livewire</strong>    
        <button  
        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
        
        wire:click="$parent.update_child">  button  in Child  by Livewire</button>

    </div>
   
    <br>
    <div class="flex  justify-between">
        <strong class=" py-2"> update  Properties 
            Parent by Alpine</strong>
        
        <button  
        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"

        x-on:click="$wire.$parent.update_child"> button  in Child by Alpine  </button>
    </div>


</div>
