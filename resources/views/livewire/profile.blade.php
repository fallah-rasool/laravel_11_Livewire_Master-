<div class="max-w-xxl mx-auto px-5 m-5"> 

    {{-- @auth
    <div class="p-4">
        سلام {{ auth()->user()->name }}
    </div>    
    @else
        <div class="p-4">
            شما لاگین نیستید
        </div>
    @endauth  --}}

    <div class="p-5">
        <h1>This is User Profile Page</h1>
        <h1>user :   {{ $user->id }}</h1>
        <p>
           name  :  {{ $user->name }}
        </p>
        <p>email :{{ $user->email }}</p>
    </div>

  
    {{-- <p>joand : {{ $user->created_at->ago() }}</p> --}}
    <hr>
    <p class="pt-5">
        <h1>
            show all users
        </h1>
        @foreach ( $users as $LoopUser)
        <li style="padding: 7px 15px;"  wire:key='user-proful-{{ $LoopUser['id'] }}'>
            <span>{{$LoopUser['id']  }}</span> -
            <span>{{$LoopUser['name']  }}</span> -
            <span>{{$LoopUser['email']  }}</span>->>-


            <samp>
                <a
                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                href="{{ route('page.user-profile',['user'=> $LoopUser['id']]) }}">go to user {{  $LoopUser['id'] }}
            </a></samp>
        </li>
        @endforeach
    </p>





</div>
