<div class="px-5 m-5 mx-auto max-w-max" > 

    <h1 dir="ltr"> Dashbord</h1>
    <h1>-----------------------------------------------------------------------------------</h1>

    
    <livewire:post.create/>
    {{-- @livewire('post.create') --}}
    
    
    <livewire:notification/>

    
    <livewire:post.PostList/>

    {{-- <script>      
        document.addEventListener('livewire:init', () => {
            Livewire.on('notify', (event) => {           
                console.log('notify called form  ');
        });
        });
     </script> --}}
</div>
