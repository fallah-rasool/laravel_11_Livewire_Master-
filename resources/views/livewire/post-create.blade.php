<div class="max-w-xl px-5 m-5 mx-auto" dir="rtl"> 

    
    <h1 wire:loading.remove> ایجاد پست جید </h1>
    <div wire:loading class="py-5">
        اطلاعات فرم در حال ارسال است صبر کیند         </div>
        <br>
    <h1>
        ----------------------------------------------------------------------------------
    </h1>
    <form wire:submit="store">
        
        <div class="flex justify-between mt-5">
                
            <label for="title"> title</label>
            <input  wire:loading.class="opacity-50" type="text"  id="title"  name="title"
            
            wire:model="form.title"
            
            class="p-2 text-green-900 border border-green-500 bg-green-50"
            >
        </div>
        <div>
            @error('form.title') <span class="error">{{ $message }}</span> @enderror
        </div>            
        <div class="flex justify-between mt-3">
                
            <label for="content"> content</label>
            <input  wire:loading.class="opacity-50"  type="text"  id="content"  name="content" 
 
            wire:model="form.content"
            
            class="p-2 text-green-900 border border-green-500 bg-green-50"
            >
        </div>
        <div>
            @error('form.content') <span class="error">{{ $message }}</span> @enderror
        </div>            
      

        <button type="submit"  
        class="        text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
          wire:loading.attr="disabled"
        wire:loading.attr="disabled">  ارسال   

                     
        </button>
        <div wire:loading class="mx-5" >
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,4a8,8,0,0,1,7.89,6.7A1.53,1.53,0,0,0,21.38,12h0a1.5,1.5,0,0,0,1.48-1.75,11,11,0,0,0-21.72,0A1.5,1.5,0,0,0,2.62,12h0a1.53,1.53,0,0,0,1.49-1.3A8,8,0,0,1,12,4Z"><animateTransform attributeName="transform" type="rotate" dur="0.75s" values="0 12 12;360 12 12" repeatCount="indefinite"/></path></svg>              
                           
        </div>

       

    </form>
</div>
