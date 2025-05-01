<div class="max-w-xl mx-auto px-5 m-5" dir="rtl"> 

   
        <a    
        class=" text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" 

        href="{{ route('creat.post')}}">ایجاد پست</a>
   
    <hr class="my-5">
    
  @foreach ($posts as  $post)

    <div style="padding: 7px 15px;"  wire:key='user-proful-{{ $post['id'] }}'>
        <span>{{$post['id']  }}</span> -
        <span>{{$post['title']  }}</span> -
        <span>{{$post['content']  }}</span>-

    
            <a    
 class="font-medium text-blue-600 dark:text-blue-500 hover:underline"

            href="{{ route('edit.post',['post'=>$post['id'] ])}}">ویرایش پست</a>
    
        
    </div>
  @endforeach
</div>
