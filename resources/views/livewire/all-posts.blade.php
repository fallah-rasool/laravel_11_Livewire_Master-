<div class="max-w-xl px-5 m-5 mx-auto" dir="rtl"> 

    <div class="max-w-4xl p-6 mx-auto mt-10 bg-white rounded shadow">
        <h1 class="mb-4 text-xl font-bold">لیست پست‌ها</h1>
    
        <table class="min-w-full text-sm border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 text-right border">#</th>
                    <th class="p-2 text-right border">عنوان</th>
                    <th class="p-2 text-right border">محتوا</th>
                    <th class="p-2 text-right border">عملیات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                    <tr class="border-t">
                        <td class="p-2 border">{{ $post->id }}</td>
                        <td class="p-2 border">{{ $post->title }}</td>
                        <td class="p-2 border">{{ Str::limit($post->content, 50) }}</td>
                        <td class="p-2 text-center border">
                            <a href="{{ url('/posts/' . $post->id . '/edit') }}"
                               class="px-3 py-1 text-white bg-blue-600 rounded hover:bg-blue-700">
                                ویرایش
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="p-4 text-center text-gray-500">
                            پستی برای نمایش وجود ندارد.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
</div>
