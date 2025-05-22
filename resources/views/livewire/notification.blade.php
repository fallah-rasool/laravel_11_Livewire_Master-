<div>
    @if ($is_visible)
        <div style="position: absolute;right:15px; top: 120px; background-color: #dddddd; width: 500px;  height: 50px; border-radius: 6px; show:5px 5px 6px; box-shadow: 5px 2px 3px 1px #c9c9c9;    border: 1px solid #cfc9c9; padding:7px 25px">
        {{ $message }}

        <span 
        {{-- @click="$wire.set('is_visible', false)" --}}
        {{-- @click="$wire.dispatch('hide')" --}}
        {{-- @click="$wire.dispatchُُself('hide')" --}}
        @click="$wire.dispatchSelf('hide')"
        style="position: absolute;left:0;to:30%;padding:5px;background:none;color:red;border-radius: 50px;width: 40px;height:24px;display:inline;font-size:18px;cursor:pointer;"> x</span>s
        </div>
    @endif

    @script
        <script>
           let id = null;
                // $wire.on('hide-notification',()=>{
                    
                // clearTimeout(id);
                
                // id =setTimeout(() => {
                    //         $wire.set('is_visible', false);                        
                    //     }, 3000);
                    // });
                    
            $wire.on('hide',()=>{
                console.log('hide notification called');
                clearTimeout(id);
                $wire.set('is_visible', false);
            });
          
            Livewire.on('notify', (event) => {           
                // console.log('notify called form  ');
                //    console.log(event);
                //    console.log(event.message);
                //    console.log($wire);
                   $wire.set('message',event.message);
                   $wire.set('is_visible',true);
                    clearTimeout(id);
                    id =setTimeout( () =>{  $wire.set('is_visible', false); },3000);                            
               });

        </script>      
    @endscript

  {{-- <script>      
        document.addEventListener('livewire:init', () => {
            Livewire.on('notify', (event) => {           
                console.log('notify called form  ');
        });
        });
     </script> --}}
  

</div>



