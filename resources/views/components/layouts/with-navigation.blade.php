<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
{{-- start nav --}}

@include('components.layouts.nav')
      
{{-- end  nav --}}
        
        {{ $slot }}

        <Footer class="max-w-xl mx-auto px-5 m-5 bg-green-500 py-5 ">
            <H2>Footer</H2>
            <hr>
            <div>
                {{ $copyright ?? 'All Raiteg ....'  }}
            </div>
        </Footer>


        <script src="https://cdn.tailwindcss.com"></script>
        <cript src="//cdn.jsdelivr.net/npm/alpinejs" defer></script>  
        @livewireScripts 
    </body>
</html>
