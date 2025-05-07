<div class="max-w-3xl px-5 m-5 mx-auto" dir="rtl"> 

    <H1> استفاده از js()</H1>

    <br class="my-5">
    
    <div class="flex justify-between" dir="rtl">
        
        <span> با کلیک کردن یک  پیام با استفاده از js  
            نمایش داده می شود 
        مقدار number از  هم نمایش داده می شود 
        </span>
    
        <button 
    
        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
        
        wire:click="showAlert">Show Alert</button>   
    </div>

    <hr>

    <div class="flex justify-between p-5" dir="ltr">

        <h1 id="message">{{ $message }}</h1>
        <button 
         class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
        wire:click="changeText">Change Text</button>
    </div>
  
    <br >

    <hr>
    <button
     class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
    wire:click="delete('5')">Delete</button>
    <br>

    <br>
    <script>
        // اضافه کردن Listener برای رویداد textUpdated
        window.addEventListener('textUpdated', event => {
            const messageElement = document.getElementById('message');
            messageElement.innerText = event.detail.message; // به‌روزرسانی متن
        });
  
    </script>

</div>
        



