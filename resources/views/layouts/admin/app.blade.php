<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>
    <!-- Font awesome-->
    <link rel="stylesheet" href="{{ asset('asset/font-awesome/css/font-awesome.min.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggler collapsed border-0 p-0" data-toggle="collapse" data-target="#app-navbar" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="{{ url('/adminbox') }}" class="navbar-brand mx-auto">
                {{ config('app.name','Laravel') }}
            </a>

            <button type="button" class="navbar-search border-0">
                <i class="fa fa-search fa-lg"></i>
            </button>

            <div class="collapse navbar-collapse" id="app-navbar">
                <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Home
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('adminbox.login') }}" class="nav-link">
                                    Masuk
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('adminbox.register') }}" class="nav-link">
                                    Buat akun
                                </a>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('asset/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
