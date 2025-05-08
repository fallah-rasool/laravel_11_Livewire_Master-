<div class="max-w-xl px-5 m-5 mx-auto" dir="rtl"> 

    <form wire:submit.prevent="addfullName">
                   
        <div class="flex justify-between">
            <label for="fullname"> full name</label>
            <input  wire:model.blur="fullname"  type="text"  id="fullname"  
            class="p-2 text-green-900 border border-green-500 bg-green-50"
            >
            @error('fullname') <span class="error">{{ $message }}</span> @enderror
            <br>
        </div>

        <div class="flex justify-between mt-5">
            
            <label for="email"> email</label>
            <input   wire:model.blur="email"  type="text"  id="email"  
            class="p-2 text-green-900 border border-green-500 bg-green-50"
            >                    
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
       
        <div class="p-5 ">
            
            <button
    
             class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
            
            type="submit">send</button>
    
            
            <button
              class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
            
            type="reset">reset</button>
        </div>
  </form>


</div>
