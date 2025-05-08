<div class="px-2">    
    <nav class="bg-white border-gray-200 dark:bg-gray-900 ">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
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
            <a href="{{ route('logout') }}" class="text-sm text-blue-600 dark:text-blue-500 hover:underline">logout</a>
        </div>
    @else
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <div class="text-white">
                    شما لاگین نیستید
                </div>
                <a href="{{ route('simulate-login') }}" class="text-sm text-blue-600 dark:text-blue-500 hover:underline">Login</a>
            </div>
        </div>
    @endauth 

    </nav>
    <nav class="bg-gray-50 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row mt-0 space-x-8 text-sm font-medium rtl:space-x-reverse">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                    </li>

                    <li class="relative group">
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="#"> تمرین ها </a>
                        <ul class="absolute left-0 z-10 hidden w-40 bg-white rounded-md shadow-md top-full group-hover:block">

                            <li>
                                <a href="{{ route('page.counter') }}" 
                                class="block px-4 py-2 hover:bg-gray-100"
                                >counter</a>
                            </li>

                            <li>
                                <a href="{{ route('page.task') }}" class="block px-4 py-2 hover:bg-gray-100e">task</a>
                            </li>
                            <li>
                              
                                <a 
                                class="block px-4 py-2 hover:bg-gray-100"                        
                                href="{{ route('Page.Welcom',['email'=>'rasool@gmail.com'])}}">Page.Welcom</a>
                            </li>

                            <li>
                                <a    
                                class="block px-4 py-2 hover:bg-gray-100" 
        
                                href="{{ route('page.user-profile',['user'=>1])}}">profile</a>
                            </li>
                            <li>
                                <a    
                                class="block px-4 py-2 hover:bg-gray-100" 
        
                                href="{{ route('page.show.customer')}}">Show-Customer</a>
                            </li>
                            <li>
                                <a    
                                class="block px-4 py-2 hover:bg-gray-100" 
        
                                href="{{ route('page.counter.alpine')}}">counterAlpine</a>
                            </li>

                            <li>
                                <a    
                                class="block px-4 py-2 hover:bg-gray-100" 
        
                                href="{{ route('page.security.concerns')}}">securityConcerns</a>
                            </li>
                            <li>
                                <a    
                                class="block px-4 py-2 hover:bg-gray-100" 
        
                                href="{{ route('all.post')}}">همه  پست</a>
                            </li>
                            <li>
                                <a    
                                class="block px-4 py-2 hover:bg-gray-100" 
        
                                href="{{ route('page.refresh')}}"> refresh</a>
                            </li>

                        </ul>
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
                      
                        <ul class="absolute left-0 z-10 hidden w-40 bg-white rounded-md shadow-md top-full group-hover:block">
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

                        <ul class="absolute left-0 z-10 hidden w-40 bg-white rounded-md shadow-md top-full group-hover:block">

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
                            <li> 
                                <a class="block px-4 py-2 hover:bg-gray-100"  href="{{ route('page.skipping.re.renders')}}">skipping.re.renders</a>
                            </li>
                            <li> 
                                <a class="block px-4 py-2 hover:bg-gray-100"  href="{{ route('page.hybrid')}}">page.hybrid</a>
                            </li>

                         </ul>
                    </li>

                    <li class="relative group">
                        <a    
                        class="text-gray-900 dark:text-white hover:underline" 

                        href="#"> form</a>
                        <ul class="absolute left-0 z-10 hidden w-40 bg-white rounded-md shadow-md top-full group-hover:block">
                            <li> 
                                <a class="block px-4 py-2 hover:bg-gray-100"  href="{{ route('page.form')}}">form</a>
                            </li>
                            <li> 
                                <a class="block px-4 py-2 hover:bg-gray-100"  href="{{ route('page.CreatePost')}}">form object</a>
                            </li>
                        </ul>
                    </li>
            </div>
        </div>
    </nav>

</div>