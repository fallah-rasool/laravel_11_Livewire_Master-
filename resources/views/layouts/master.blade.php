<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <div class="px-2">    
            <nav class="bg-white  border-green-200 dark:bg-green-900 text-white">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                    <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap ">laravel_11_Livewire_Master</span>
                    </a>
                     @auth
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <div class="text-white">
                 {{ auth()->user()->name }}
                 سلام
            </div>
            <a href="{{ route('logout') }}" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">logout</a>
        </div>
    @else
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                @auth
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <div class="text-white">
                         {{ auth()->user()->name }}
                         سلام
                    </div>
                    <a href="{{ route('logout') }}" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">logout</a>
                </div>
            @else
                    <div class="flex items-center space-x-6 rtl:space-x-reverse">
                        <div class="text-white">
                            شما لاگین نیستید
                        </div>
                        <a href="{{ route('simulate-login') }}" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>
                    </div>
                </div>
            @endauth 
            </div>
        </div>
    @endauth 
                </div>
            </nav>
            <nav class="bg-white  border-green-200 dark:bg-green-600">
                <div class="max-w-screen-xl px-4 py-3 mx-auto">
                    <div class="flex items-center">
                        <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                            <li>
                                <a href="{{ route('home') }}" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('page.counter') }}" class="text-gray-900 dark:text-white hover:underline">counter</a>
                            </li>
                            <li>
                                <a href="{{ route('page.task') }}" class="text-gray-900 dark:text-white hover:underline">task</a>
                            </li>
                            <li>
                                <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>        
        </div>
       

 @yield('content')

            {{-- start app --}}
                {{-- <h6> start app</h6> --}}

                 <div id="app">@yield('app') </div>

                {{-- <h6> end app</h6> --}}

            {{-- end app --}}


            <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>
