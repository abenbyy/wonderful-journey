<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/5f0f0f2d20.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                   Wonderful Journey
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" 
                    style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    ">
                        <li class="nav-item" style="margin:0 10px">
                            <a href="/home" style="color: black">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" style="color: black;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Categories
                            </a>

                            <div class="dropdown-menu">
                                <a href="/categories/beach" class="nav-link">Beach</a>
                                <a href="/categories/mountain" class="nav-link">Mountain</a>
                            </div>
                        </li>

                        <li class="nav-item" style="margin:0 10px">
                            <a href="/about" style="color: black">About Us</a>
                        </li>

                        @if (Auth::user() && Auth::user()->role === 'admin')
                            <li class="nav-item" style="margin:0 10px">
                                <a href="/articles/manage" style="color: black">Admin</a>
                            </li>
                            <li class="nav-item" style="margin:0 10px">
                                <a href="/users" style="color: black">Users</a>
                            </li>
                        @endif
                        
                        @if (Auth::user() && Auth::user()->role === 'user')
                            <li class="nav-item" style="margin:0 10px">
                                <a href="/profile" style="color: black">Profile</a>
                            </li>
                            <li class="nav-item" style="margin:0 10px">
                                <a href="/articles/user" style="color: black">Blog</a>
                            </li>    
                        @endif
                        
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
</body>
</html>
