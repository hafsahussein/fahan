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
<div class="md:flex flex-wrap">

   <!-- mobile menu bar -->
          <div class="bg-blue-900 flex justify-between py-1 items-center md:hidden">

            <!-- logo -->
        <a href="/" class="block p-4" style="max-width: 33%;">
          <img src="{{asset("/images/logo.png")}}" alt="" class="max-w-full ">
      </a>
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
        <!-- mobile menu button -->
        <button class="mobile-menu-button p-4 focus:outline-none">
          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
  
    <!-- sidebar -->
    <div class="sidebar min-h-screen bg-blue-900 text-blue-100 w-64 space-y-6 py-7 px-2 absolute z-10 inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
  
      <!-- logo -->
      <a href="/" class="flex items-center space-x-2 px-4">
      <img src="{{asset('images/logo.png')}}" alt="">
      </a>
  
      <!-- nav -->
      <nav>
        <a href="/" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
          Erayada
        </a>
        <a href="/erayada/create" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
          ku dar Eray Cusub
        </a>
        <a href="{{ route('logout') }} "
         class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();"
         >
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
        </form>
      </nav>
    </div>
    <div class="bg-blue-900 h-20 md:flex items-center hidden" style="width: calc(100% - 256px);">
      <form class="w-4/5 mx-auto"
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
    <div class="px-2 absolute left-0 md:left-64 top-28 w-full bottom-28 overflow-y-scroll content">
      @yield('content')
    </div>
    </div>
@include('layouts.footer')
</html>