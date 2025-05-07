<div class="max-w-3xl px-5 m-5 mx-auto" dir="rtl"> 
   
     <a    
        class=" text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" 
        href="{{ route('creat.post')}}">ایجاد پست</a>
   
    <hr class="my-5">
    <table class="w-full">
        <thead>
            <tr>
              <th>#</th>
              <th>title</th>
              <th>content</th>
              <th>edit</th>
              <th>comments</th>
              <th>حذف</th>
            </tr>
          </thead>
      <tbody>
  @foreach ($posts as  $post)
  <tr wire:key='user-proful-{{ $post['id'] }}' class="text-center align-middle" >
   
        <td>{{$post['id']  }}</td> 
        <td>{{$post['title']  }}</td> 
        <td>{{$post['content']  }}</td>
    

        <td>
            <a   class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                href="{{ route('edit.post',['post'=>$post['id'] ])}}">ویرایش </a>
        </td>
        <td>
        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
            href="{{ route('post.comments',['post'=>$post['id'] ])}}"> ایجاد و مشاهده  کامنت  </a>
        </td>

        <td class="p-5">

           
            {{-- //1 --}}
      
                {{-- <button 
                 class="text-lg font-medium text-red-700 rounded-lg focus:outline-none hover:bg-red-800 hover:text-white focus:ring-4 focus:ring-red-300"
                   wire:click="delete({{ $post->id }})"     
                >Delete</button> --}}
           
           {{-- //2 --}}

                {{-- @if (Auth::user()->isAdmin())
                    <button 
                    class="text-lg font-medium text-red-700 rounded-lg focus:outline-none hover:bg-red-800 hover:text-white focus:ring-4 focus:ring-red-300"
                    wire:click="delete({{ $post->id }})"     
                    >Delete</button>

                @endif --}}

                {{-- 3 --}}
           
                
                {{-- تا زمانی که ادمین نباشی اجازه حذف کردن را نمی دهد  --}}
             
                    <button 
                    class="text-lg font-medium text-red-700 rounded-lg focus:outline-none hover:bg-red-800 hover:text-white focus:ring-4 focus:ring-red-300"
                    
                    wire:click="deletePost({{ $post->id }})" 
                        
                    >Delete</button>

           
            
        </td>
     </tr>
    
  @endforeach

      </tbody>
    </table>
</div>
