<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="description" content="Situs web untuk sarana informasi, pertemanan dan bisnis.">
    <meta name="keywords" content="ap,ab,box,apolbox,apol">
    <meta name="author" content="Ayus irfang filaras">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') {{ Auth::user()->firstname }}</title>
    <!-- icon web -->
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" size="16x14">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- material design iconic -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- Material design bootstrap
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css">-->
    <!-- icon web -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <!-- Font awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style media="screen">
        .form-search {
            width: 45%;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="navbar navbar-expand-md navbar-dark bg-dark fixed-top border-bottom py-md-1">
            <a href="{{ url('/') }}" class="navbar-brand">
                Apolbox
            </a>
            <form class="form-search my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="search" class="form-control form-control-sm" name="q" placeholder="Cari di apolbox">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-white px-3">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav">
                <li class="nav-item dropdown users">
                    <a href="#" class="nav-link text-light bg-dark" role="button" id="settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img width="28" height="24" class="rounded-circle" src="{{ asset('img/male.png') }}" alt="...">
                        <i class="zmdi zmdi-account zmdi-hc-lg"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="settings">
                        <li class="dropdown-item">
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
            </ul>
        </div>
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{--<script src="{{ asset('js/jquery.numberedtextarea.js') }}"></script>
    <script>
        $('textarea').numberedtextarea();
    </script>--}}
    <script src="{{ asset('js/mobile-detect.min.js') }}"></script>
    <script>
        var md = new MobileDetect(window.navigator.userAgent);
    </script>
</body>
</html>
