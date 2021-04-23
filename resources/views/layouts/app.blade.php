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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .nav li {
        display: inline-block;
        
    }
</style>
<body>
    
        <nav style="background-color: #045ab0;" class='nav'>  
                
                    <ul class=''>
                    @auth
                    
                        <li class='nav-item'>
                            <a href="#" class='nav-link'>{{auth()->user()->name}}</a>
                        </li>
                        <li class='nav-item'>
                            <a href="#" class='nav-link' >Messages</a>
                        </li>
                        <li class='nav-item'>
                            <form action="{{route('logout')}}" method='post'>
                                @csrf
                                <button type='submit'>Logout</button>
                            </form>
                        </li>
                  
                    @endauth
                    @guest
                        <li class='nav-item'>
                            <a href="{{route('login')}}" class='nav-link'>Login</a>
                        </li>
                        <li class='nav-item'>
                            <a href="{{ route('register')}}" >Create Account</a>
                        </li>
                    </ul>
                    @endguest
        </nav>

        @yield('content')
    
</body>
</html>
