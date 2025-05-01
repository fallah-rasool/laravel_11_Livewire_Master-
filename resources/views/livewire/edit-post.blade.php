<div class="max-w-xl mx-auto px-5 m-5" dir="rtl"> 

    <a    
    class=" text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" 

    href="{{ redirect()->back()}}">برگشت به عقب </a>


    <div class="max-w-xl mx-auto p-4 bg-white shadow rounded">
        @if (session()->has('message'))
            <div class="text-green-600 font-bold">{{ session('message') }}</div>
        @elseif (session()->has('error'))
            <div class="text-red-600 font-bold">{{ session('error') }}</div>
        @endif
    
        <h2 class="text-lg font-bold mb-4">ویرایش پست</h2>
    
        <input type="text" wire:model="title" class="border p-2 w-full mb-2" placeholder="عنوان پست">
        <textarea wire:model="content" class="border p-2 w-full mb-2" placeholder="محتوا"></textarea>
    
        <button wire:click="updatePost"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            ذخیره تغییرات
        </button>
    </div>

    
    
</div>
