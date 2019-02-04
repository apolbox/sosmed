<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Situs web untuk sarana informasi, pertemanan dan bisnis.">
    <meta name="keywords" content="ap,ab,box,apolbox,apol">
    <meta name="author" content="Ayus irfang filaras">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>
    <!-- icon web -->
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" size="16x14">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- icon web -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <!-- Font awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- material design iconic -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style media="screen">
        html {
            font-size: 100%;
        }
        body {
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            margin: 0 0;
            padding-top: 45px;
        }
        .form-search {
            width: 50%;
        }
        .form-search .form-control {
            box-shadow: 0 0 0;
        }
        .form-search .btn:active,
        .form-search .btn:focus {
            box-shadow: 0 0 1px;
        }
        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            body {
                font-family: 'Raleway', sans-serif;
                font-weight: 400;
                font-size: 12pt;
                padding-top: 48px;
            }
            .well {
                font-size: 16pt;
            }
            .deskripsi {
                font-size: 12pt;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-md-1 py-1">
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <span class="navbar-brand-title">{{ config('app.name','Laravel') }}</span>
                </a>
                <ul class="nav d-md-none pull-xs-right">
                    <li class="nav-item">
                        <a href="#" class="nav-link px-1 text-secondary" data-toggle="modal" data-target="#navbar-search">
                            <i class="zmdi zmdi-search zmdi-hc-fw zmdi-hc-lg"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link px-1 text-secondary" id="isMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="zmdi zmdi-more-vert zmdi-hc-fw zmdi-hc-lg"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right py-0 rounded-0" aria-labelledby="isMenu" style="left: -8.5em;">
                            <a href="{{ url('/login') }}" class="nav-link dropdown-item">Masuk</a>
                            <a href="{{ url('/register') }}" class="nav-link dropdown-item">Buat akun</a>
                        </div>
                    </li>
                </ul>

                <div class="collapse navbar-collapse">
                    <form class="form-search my-0 my-lg-0">
                        <div class="input-group input-group-sm">
                            <input type="search" class="form-control form-control-sm" name="q" placeholder="Cari di apolbox">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-white px-3 text-secondary">
                                    <i class="zmdi zmdi-search zmdi-hc-fw zmdi-hc-lg"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="nav ml-auto justify-content-end">
                        @guest
                            <li class="nav-item">
                                <a href="{{ url('/login') }}" class="nav-link text-secondary">
                                    Masuk
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/register') }}" class="nav-link text-secondary">
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
            </div>
        </nav>

        <div class="modal fade" id="navbar-search" tabindex="-1" role="dialog" aria-labelledby="navbar-search-label" aria-hidden="true">
            <div class="modal-dialog m-0" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <form class="form-search my-0 my-lg-0 w-100" action="{{ route('search') }}" method="get">
                            <div class="input-group input-group-sm">
                                <input type="search" class="form-control form-control-sm" name="q" placeholder="Cari di apolbox">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-white px-3">
                                        <i class="zmdi zmdi-search zmdi-hc-fw zmdi-hc-lg"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
