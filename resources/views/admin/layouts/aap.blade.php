<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles ke css di public -->
        <link href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            
        </style>

    </head>

    <body>

        <input type='checkbox' id='toggle'> </input>
      
         <!-- Menu -->
         <aside class='sidebar'>
           <label for='toggle' class='exit'>X</label>
           <header>Admin Control</header>
            <ul>
                <li><a href="/home"><i class="fas fa-qrcode"></i>Dashboard</a></li>
                <li><a href="/createproduk"><i class="fas fa-link"></i>Tambah produk</a></a></li>
                <li><a href="/editpageproduk"><i class="fas fa-qrcode"></i>produk kontrol</a></li>
                <li><a href="/createblog"><i class="fas fa-qrcode"></i>Tambah blog</a></li>
                <li><a href="/editpageblog"><i class="fas fa-qrcode"></i>blog kontrol</a></li>
            </ul>
         </aside>

        <section>
            <!-- Content -->
            <div class='content'>
                <label for='toggle' class='button'>></label>
                
                
                <div id="app">
                    

                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

                        
                        
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
            
                                </ul>
            
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
            
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>

         </section>

    </body>
</html>


