<div class="max-w-xl mx-auto px-5 m-5"> 

    <h2>use Actoin Js</h2>
    <button        onmousedown="console.log('onmouse down')"       > on mouse down </button>
    <button       onmouseenter="console.log('onmouse enter')"       >on mouse enter</button>
    <button       onmouseleave="console.log('onmouse leave')"       >on mouse leave </button>

     <h2>use Actoin Livewire </h2>
     <h2>   <strong>enter : {{ $enter }} |  leave: {{ $leave }}</strong></h2>

     <button    
         class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
     
     wire:mouseenter='mouseenter'>mouse enter </button>
     <button   
        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
     
     wire:mouseleave='mouseleave'>mouse leave </button>


<h2>use Actoin Alpain </h2>
     <h2>   <strong>Alpain : {{ $Alpain }} </strong></h2>

     <button  
        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
     
     x-on:click="$wire.incrementAlpain()" >increment Alpain </button>
     <button  
        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
     
     x-on:click="$wire.decrementAlpain()" >decrement Alpain </button>
     <div x-data="{ isHovered: false }">
         <div
             @mouseenter="isHovered = true"
             @mouseleave="isHovered = false"
             x-bind:style="isHovered ? 'background-color: lightblue;' : ''"
             style="width: 200px; height: 100px; border: 1px solid black;">
             Hover over me!
         </div>
     </div> 

<h2>use Actoin Livewire & Alpain </h2>
     <h2>   <strong>enter : {{ $enter }} |  leave: {{ $leave }}</strong></h2>
     <h2>   <strong>add Alpain : {{ $Alpain }} </strong></h2>
     <button

        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
        
         wire:mouseenter='mouseenter'
         wire:mouseleave='mouseleave'
         wire:dblclick="mouseenter"
         x-on:click="$wire.incrementAlpain()"
      >Livewire & Alpain </button>

      
</div>
