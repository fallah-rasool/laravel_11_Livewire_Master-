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

        <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>
