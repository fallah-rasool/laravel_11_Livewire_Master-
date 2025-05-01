<div class="max-w-3xl mx-auto px-5 m-5" dir="rtl"> 
   
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
            </tr>
          </thead>
      <tbody>
  @foreach ($posts as  $post)
  <tr wire:key='user-proful-{{ $post['id'] }}' class="text-center  align-middle" >
   
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
     </tr>
    
  @endforeach

      </tbody>
    </table>
</div>
