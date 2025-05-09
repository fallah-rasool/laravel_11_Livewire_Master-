<div  dir="rtl"> 

    <div class="max-w-xl p-6 mx-auto mt-10 bg-white rounded shadow">
        <form wire:submit.prevent="save">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">عنوان</label>
                <input type="text" wire:model.defer="form.title"
                       class="w-full p-2 mt-1 border border-gray-300 rounded">
                @error('form.title') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">محتوا</label>
                <textarea wire:model.defer="form.content"
                          class="w-full h-32 p-2 mt-1 border border-gray-300 rounded"></textarea>
                @error('form.content') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
    
            <button type="submit"
                    class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                ذخیره تغییرات
            </button>
        </form>
    </div>
</div>
