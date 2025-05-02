<div class="max-w-xl mx-auto px-5 m-5" dir="rtl"> 

    <div class="max-w-xl mx-auto p-5">
        
        {{-- <ul>
            @foreach ($this->todos as $todo)
          
                <li><strong>  id :</strong> {{ $todo['id'] }}</li>
                <li><strong>title :  </strong>{{ $todo['title'] }}</li>
                <li><strong>content :</strong> {{ $todo['content'] }}</li>
           
                {{-- <li>{{ $todo-title }}</li>
                <li>{{ $todo-content }}</li> 
            @endforeach
        </ul>
        --}}
        <hr> 

        <h1 class="text-xl font-bold mb-4">لیست کارها</h1>

    
        <ul class="space-y-2">
            @foreach ($this->todos as $todo)
                <li class="p-3 bg-gray-100 rounded shadow">
                    <strong>ID:</strong> {{ $todo->id }} <br>
                    <strong>Title:</strong> {{ $todo->title }} <br>
                    <strong>Content:</strong> {{ $todo->content }}
                </li>
            @endforeach
        </ul>
    </div>

    
    
        <button wire:click="causeError"
            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
            اجرای متد و دیدن ارور
        </button>
    </div>

</div>
