<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
            <header class="bg-blue-900 py-3">
                <div class="container mx-auto flex justify-between items-center px-6">
                    <div class="w-1/5">
                        <a href="{{ url('/') }}">
                            <img src="{{asset('images/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <form class="w-2/5"
                    method="GET"
                    action="/erayada"
                    >
            
                    <div class="relative bg-white rounded-3xl py-3">
                        <input type="text"
                            class="h-full w-full bg-transparent text-gray-700 outline-none pl-3" name="raadi"
                            placeholder="Raadi"
                        required>
                        <button type="submit"
                        class="select-none font-bold whitespace-no-wrap absolute right-0 top-1/2 transform -translate-y-1/2 text-blue-900 mr-3 text-xl ">
                        <i class="fas fa-search"></i></button>
                    </div>
                    </form>
                   </div>
            </header>
            <div class="px-2 absolute left-0 top-28 w-full bottom-28 overflow-y-scroll">
                @yield('content')
              </div>
        @include('layouts.footer')
    </div>
</body>
</html>
