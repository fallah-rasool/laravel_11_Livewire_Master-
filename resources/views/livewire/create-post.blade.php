<div class="max-w-xl px-5 m-5 mx-auto" dir="rtl"> 

    <h1>
        Extracting a form object
    
    </h1>

    <h1>-------------------------------------------------------------------------------</h1>

    
    <form wire:submit="save">
        
        <div class="flex justify-between mt-5">
                
            <label for="title"> title</label>
            <input   type="text"  id="title"  name="title"
            
            wire:model="form.title"
            
            class="p-2 text-green-900 border border-green-500 bg-green-50"
            >
        </div>
        <div>
            @error('form.title') <span class="error">{{ $message }}</span> @enderror
        </div>            
        <div class="flex justify-between mt-3">
                
            <label for="content"> content</label>
            <input    type="text"  id="content"  name="content" 
 
            wire:model="form.content"
            
            class="p-2 text-green-900 border border-green-500 bg-green-50"
            >
        </div>
        <div>
            @error('form.content') <span class="error">{{ $message }}</span> @enderror
        </div>            
        <button type="submit">Save</button>
    </form>
    
</div>
