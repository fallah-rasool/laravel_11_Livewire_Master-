<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        @include('components.layouts.nav')
        {{-- <header style="display: flex; justify-content: space-between;align-items: center; background-color: #763515; padding: 0 30px; gap: 32px; text-white;p-5">
            <h1 class="text-white bg-gradient-to-r">layouts  Secondary </h1>
            <nav >
                <ul style="display: flex; align-items: center; justify-content: center; gap:64px ; align-content: center;list-style: none;padding: 0 ;margin: 0;">
                   <li style="padding: 7px ;margin: 0 5px;">
                        <a class="text-white bg-gradient-to-r" href="{{ route('counter.page')}}">Counter</a>
                    </li>
                    <li style="padding: 7px ;margin: 0 5px;">
                        <a class="text-white bg-gradient-to-r" href="{{ route('index.page')}}">index</a>
                    </li>
                    <li style="padding: 7px ;margin: 0 5px;">
                        <a class="text-white bg-gradient-to-r"  href="{{ route('post.crate') }}">post.crate</a>
                    </li>
                </ul>
            </nav>
        </header> --}}

            @yield('content')

            <div id="app">@yield('app') </div>


            <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>
