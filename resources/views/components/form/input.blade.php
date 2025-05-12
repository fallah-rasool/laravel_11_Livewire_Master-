@props([
    'label',
    'model',
    'key',
    'name',
    'type'=>'text',    
])
<div>
    <label for="input-{{ $key }}"  >{{$label}}</label>  
    <input    
        id="input-{{ $key }}"
        wire:model.live.throttle="{{ $model }}"
        name="{{ $name }}"
        type="{{ $type }}"    
    class="p-2 text-green-900 border border-green-500 bg-green-50"   
    >   
</div>