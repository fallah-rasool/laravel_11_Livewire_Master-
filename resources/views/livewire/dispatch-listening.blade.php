<div class="max-w-xl mx-auto px-5 m-5"> 
  

   <h1>-----------------------------------------------------------</h1>
   <h1>-----------------------------------------------------------</h1>
   <h1>-----------------------------------------------------------</h1>
   <h1>-----------------------------------------------------------</h1>


<br>
<br>

    <div x-data="{ message: '' }" @messagesent="message = $event.detail.text">
        <div  x-text="message" class="mb-5 p-2 mt-2 border border-gray-300"></div>
        <button 
        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"
        x-on:click='$dispatch("messagesent", { text: "سلام به همه!" })'>
            ارسال پیام
        </button>
    </div>
    <h1>-----------------------------------------------------------</h1>


    <div x-data="{ message: '' }" @greet="message = 'سلام, ' + $event.detail.name">
        <p class="mb-5" x-text="message"></p>
        <button
        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"
        
        x-on:click='$dispatch("greet", { name: "جهان" })'>Dispatch Greet</button>
    </div>



</div>
