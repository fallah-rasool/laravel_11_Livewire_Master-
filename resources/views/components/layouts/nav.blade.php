<div class="px-2">    
    <nav class="bg-white border-gray-200 dark:bg-gray-900 ">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">laravel_11_Livewire_Master</span>
            </a>
    
    @auth
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            <div class="text-white">
                سلام
                <strong>
                    {{ auth()->user()->name }}
                </strong>
                 
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

    </nav>
    <nav class="bg-gray-50 dark:bg-gray-700">
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
                      
                        <a 
                        class="text-gray-900 dark:text-white hover:underline"                        
                        href="{{ route('Page.Welcom',['email'=>'rasool@gmail.com'])}}">Page.Welcom</a>
                    </li>

                    <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('page.user-profile',['user'=>1])}}">profile</a>
                    </li>
                    <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('page.show.customer')}}">Show-Customer</a>
                    </li>
                    <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('page.counter.alpine')}}">counterAlpine</a>
                    </li>
                    <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('page.security.concerns')}}">securityConcerns</a>
                    </li>
                    <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('all.post')}}">همه  پست</a>
                    </li>
                   
                  
                </ul>
            </div>
        </div>
    </nav>

</div>