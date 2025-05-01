<div class="max-w-xl mx-auto p-4"  dir="rtl">

    <a    
    class=" text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" 
    href="{{ route('all.post')}}">برگشت </a>



    <h2 class="py-5 text-2xl font-semibold mb-4">نظرات مربوط به: {{ $post->title }}</h2>

    {{-- نمایش پیام موفقیت --}}
    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    {{-- فرم افزودن نظر --}}
    <form wire:submit.prevent="addComment" class="mb-6">
        <label for="newComment" class="block text-gray-700 font-medium mb-1">ثبت نظر جدید:</label>
        <textarea
            id="newComment"
            wire:model.defer="newComment"
            class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:border-blue-500"
            placeholder="نظر خود را بنویسید..."
            rows="3"
        ></textarea>
        @error('newComment')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror

        <button
            type="submit"
            class="mt-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded"
        >
            ارسال نظر
        </button>
    </form>

    {{-- لیست نظرات --}}
    <div class="space-y-4">
        @forelse ($comments as $comment)
            <div class="bg-gray-100 p-3 rounded shadow-sm">
                <p class="text-gray-800">{{ $comment->body }}</p>
                <span class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
            </div>
        @empty
            <p class="text-gray-500">هنوز نظری ثبت نشده است.</p>
        @endforelse
    </div>
</div>
