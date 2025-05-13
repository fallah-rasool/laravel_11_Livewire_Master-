<div class="max-w-xl px-5 m-5 mx-auto" dir="ltr"> 

    <h1 dir="ltr"> Dashbord</h1>
    <h1>-----------------------------------------------------------------------------------</h1>

    <style>
        label{
            width: 150px;
        }
        input{
            width: 250px;
        }
    </style>

    <h2 class="py-5 mb-5">create post </h2>
  
    <div dir="ltr">
        <form wire:submit.prevent="create">
            <div class="flex " dir="ltr">
                <label 
                class="mx-3 px3"
                for="input-title">title</label>
                
                <input type="text"
                wire:model="title"
                id="input-title"
                name="title"
                type="text"

                class="p-2 text-green-900 border border-green-500 bg-green-50"
                >
                @error('title') <span class="error">{{ $message }}</span> @enderror

                
            </div>
            <br>
            <div class="flex " dir="ltr">
                <label
                  class="mx-3 px3"
                for="input-content">content</label>
                
                <textarea type="text"
                wire:model="content"
                id="input-content"
                name="content"
                rows="5"
                role="15" cols="30"
                class="p-2 text-green-900 border border-green-500 bg-green-50"
                
                ></textarea>
                @error('content') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <button 
            
            type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">create </button>

        </form>
    </div>
</div>
