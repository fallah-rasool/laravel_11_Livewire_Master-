<div class="max-w-xl mx-auto px-5 m-5" dir="rtl"> 



    <h1 class="px-5 mb-3">
        <strong> $toggle</strong>
    </h1>
    <hr class="my-5">

    <h2 class="mb-5">
        {!! $is_magic
            ? '<span class="bg-green-500  text-white px-5 py-3 my-2 mx-5">yes</span>'
            : '<span class="bg-red-500  text-white px-5 py-3 my-2 mx-5">no</span>'
        !!}
        : is_magic  
    </h2>

    <div class="flex justify-between justify-stretch mt-5">

        <span class="px-5 py-2.5 me-2 mb-2">

            use by Livewire
        </span>
        <button 
         class="focus:outline-none text-white text-green bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 text-red font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
    
        wire:click='$toggle("is_magic")'>is_magic</button>
    
        <hr class="py-5 mt-5">
        <span class="px-5 py-2.5 me-2 mb-2">
            use by Alpin
        </span>

        <button  
          class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
        x-on:click='$wire.$toggle("is_magic")'>is_magic</button>
    </div>


    <h1>--------------------------------------------------------------------------------</h1>
    <h1 class="px-5 mb-3">    <strong>$set</strong>    </h1>
    
    <div dir="ltr">
        
        <span >
            username 
        </span>
        <span class="text-green-900 px-5">
            {{ $username }}
        </span>
    </div>
    
    <br>
    
    <button wire:click="$set('username', 'johndoe')"
    
    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-5"
    
    >Set Username</button>
    
    <span style="padding: 0 15px;margin:0 15px 0 15px ;">
        <label for=""> enter text </label>
        <input type="text" name=""  wire:keydown.enter='$set("username",$event.target.value)'
        class="bg-green-50 border border-green-500 text-green-900 p-2"
        >
        
        
        
    <h1>--------------------------------------------------------------------------------</h1>

    </div>
    