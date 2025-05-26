<div class= "max-w-xl px-5 m-5 mx-auto " > 
    <strong>Lifecycle</strong>
    <br>
    <br>
    <button wire:click.prevent="$refresh"
    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2"
    >
        Refresh
    </button>
  
    <hr style="color: #000;border: #000 solid 1px;margin: 10px 0;">

    <h1> <strong>Mount Hooks</strong> </h1>

    <p>Creation Time : {{ $creation_time }}</p>
    <p>Mount Called : {{ $mount_called}}</p>
    <p>Mount id : {{ $mount_id??'not set' }}</p>
    {{-- <p>Mount Request : {{ $mount_request}}</p> --}}

  
    <hr style="color: #000;border: #929292 solid 1px;margin: 10px 0;">
    {{-- The whole world belongs to you. --}}

    <h1> <strong>Boot Hooks</strong> </h1>

    <p>
        Last Boot Time: {{ $boot_time }}
    </p>
    <p>
        Boot Calls: {{ $boot_calls }} times
    </p>



    <hr style="color: #000;border: #929292 solid 1px;margin: 10px 0;">

    <h1> <strong>Update Hooks</strong> </h1>
    <div>
        <label for="input-user_id">
            User ID
        </label>
        <br>
        <input
            id="input-user_id"
            type="text"
            name="user_id"
            wire:model.blur="user_id"
            class="p-2 text-green-900 border border-green-500 bg-green-50"
        >
    </div>
    <br>
    <div>
        <label for="input-username">
            Username
        </label>
        <br>
        <input
            id="input-username"
            type="text"
            name="username"
            wire:model.blur="username"
            class="p-2 text-green-900 border border-green-500 bg-green-50"
        >
        @error('username')
        <p style="color: indianred; font-size: 0.8rem">
            {{ $message }}
        </p>
        @enderror
    </div>
    <br>
    <div>
        <label for="input-email">
            Email
        </label>
        <br>
        <input
            id="input-email"
            type="text"
            name="email"
            wire:model.blur="email"
            class="p-2 text-green-900 border border-green-500 bg-green-50"
        >
        @error('email')
        <p style="color: indianred; font-size: 0.8rem">
            {{ $message }}
        </p>
        @enderror
    </div>
    <br>
    <hr style="color: #000;border: #929292 solid 1px;margin: 10px 0;">
    
    <h1> <strong>Hydrate & Dehydrate Hooks</strong> </h1> <br>
 
    <p>
        Post Title: {{ $post?->title ?? 'not set' }}
    </p>
    <p>
        Post Caption: {{ $post?->caption ?? 'not set' }}
    </p>
    <p>
        Post Likes: {{ $post?->likes ?? 'not set' }}
    </p>
    <button wire:click.prevent="magic">
        Magic
    </button>
    <br>
    
    <br>
    <br>
</div>
