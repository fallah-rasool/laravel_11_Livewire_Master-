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
                    <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('page.refresh')}}"> refresh</a>
                    </li>
                    <li>
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="{{ route('page.event.listener')}}">listener</a>
                    </li>
                    <br>
                   
                   
                    <li class="relative group">
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="#"> dispatch</a>
                      
                        <ul class="absolute left-0 top-full hidden group-hover:block bg-white shadow-md  rounded-md w-40 z-10">
                            <li>
                                <a    
                                class="block px-4 py-2 hover:bg-gray-100" 
        
                                href="{{ route('page.dispatchListening')}}"> dispatchListening</a>
                            </li>
                            <li> 
                                <a class="block px-4 py-2 hover:bg-gray-100" 
        
                                href="{{ route('page.task.list')}}"> task.list</a>
                           
                             </li>
                        
                          </ul>
                    </li>
                    <li class="relative group">
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="#"> magic.actions</a>

                        <ul class="absolute left-0 top-full hidden group-hover:block bg-white shadow-md  rounded-md w-40 z-10">

                            <li> 
                                <a class="block px-4 py-2 hover:bg-gray-100"  href="{{ route('page.magic.actions')}}">actions</a>
                            </li>
                            <li> 
                                <a class="block px-4 py-2 hover:bg-gray-100"  href="{{ route('page.is.magic')}}">toggle and set</a>
                            </li>
                            <li> 
                                <a class="block px-4 py-2 hover:bg-gray-100"  href="{{ route('page.parent.my')}}">parent.my</a>
                            </li>
                            <li> 
                                <a class="block px-4 py-2 hover:bg-gray-100"  href="{{ route('page.todo.list')}}">todo.list</a>
                            </li>

                         </ul>
                    </li>
            </div>
        </div>
    </nav>

</div>