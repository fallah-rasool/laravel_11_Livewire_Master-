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
</div>
