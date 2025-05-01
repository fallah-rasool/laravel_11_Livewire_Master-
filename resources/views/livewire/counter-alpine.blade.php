<div class="max-w-xl mx-auto px-5 m-5"> 

    <h1>This is Counter Page</h1>
    <hr>
    <div x-data="{ count: @entangle('count') }">
        <span style="font-size: 2rem" x-text="count"></span>
        <hr>
        <button @click="count++" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium  text-sm px-5 py-2.5 text-center me-2 mb-2 ">Increase </button>

        <button @click="count--" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium  text-sm px-5 py-2.5 text-center me-2 mb-2 "> Decreasing </button>
<hr>
<h1 class="py-2 mt-2"> با هر بار کلیک کردن یک در خواست سمت سرور ارسال می شود </h1>
        <button wire:click="increment" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium  text-sm px-5 py-2.5 text-center me-2 mb-2 ">Increase Server</button>
        <button wire:click="Decreasing" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium  text-sm px-5 py-2.5 text-center me-2 mb-2 ">Decreasing  Server</button>
    </div>

</div>
