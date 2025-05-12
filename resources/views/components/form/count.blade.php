<div 


x-data="{ count: 0 }" 

x-modelable="count" {{ $attributes }}


class="flex justify-between p-5">
        
    <button 

    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2" 
        
    @click="count--"
   
   >-</button>
 
    <span   x-text="count"   class="text-lg"   ></span>
 
    <button 
        @click="count++"
    
    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2"  
    >+</button>
</div>