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
        html {
            font-size: 100%;
        }
        body {
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            margin: 0 0;
            padding-top: 60px;
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
                padding-top: 60px;
                padding-bottom: 48px;
            }
            .well {
                font-size: 16pt;
            }
            .deskripsi {
                font-size: 12pt;
            }
            .navbar {
                top: auto;
                bottom: 0;
                padding-left: 0;
                padding-right: 0;
                border-top: 1px solid #eee;
                border-bottom: none;
            }
            .navbar.search {
                top: 0;
                bottom: auto;
            }
            .navbar.search .navbar-brand {
                display: block;
            }
            .navbar .container-fluid {
                padding: 0 0;
            }
            .form-search,
            .navbar-brand {
                display: none;
            }
            .header-post-title {
                display: none;
            }
            .toolbar .zmdi {
                font-size: 22pt;
            }
            #sidenav {
                position: fixed;
                top: 0;
                bottom: 0;
                width: 100%;
                padding-top: 50px;
                overflow: hidden;
            }
        }
        .areapost {
            resize: none;
        }
        .areapost:focus {
            box-shadow: 0 0 0;
        }
        .sampul {
            height: 240px;
        }
        .foto-profil {
            width: 25%;
            margin: 0 auto;
            left: 0;
            right: 0;
            bottom: -2em;
            box-shadow: 0 0 7px #eee;
        }
    </style>
</head>
<body class="bg-light">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top p-md-1 py-1 border-bottom">
            <div class="container-fluid">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <i class="zmdi"> Apolbox</i>
                </a>
                <form class="form-search my-2 my-lg-0">
                    <div class="input-group input-group-sm">
                        <input type="search" class="form-control form-control-sm" name="q" placeholder="Cari di apolbox">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-white px-3 text-secondary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="toolbar nav nav-tabs nav-justified d-md-none border-0">
                    <a href="#" class="nav-link text-secondary border-0">
                        <i class="zmdi zmdi-home zmdi-hc-fw zmdi-hc-lg"></i>
                    </a>
                    <a href="#" class="nav-link text-secondary border-0">
                        <i class="zmdi zmdi-accounts zmdi-hc-fw zmdi-hc-lg"></i>
                    </a>
                    <a href="#" class="nav-link text-secondary border-0">
                        <i class="zmdi zmdi-comments zmdi-hc-fw zmdi-hc-lg"></i>
                    </a>
                    <a href="#" class="nav-link text-secondary border-0">
                        <i class="zmdi zmdi-globe zmdi-hc-fw zmdi-hc-lg"></i>
                    </a>
                    <a href="#" class="nav-link text-secondary border-0" id="menu">
                        <i class="zmdi zmdi-menu zmdi-hc-fw zmdi-hc-lg"></i>
                    </a>
                </div>

                <div class="collapse navbar-collapse">
                    <div class="btn-group mx-md-auto">
                        <div class="dropdown">
                            <a href="#" class="nav-link text-secondary" id="friendship" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="zmdi zmdi-accounts zmdi-hc-fw zmdi-hc-lg"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-md-2" aria-labelledby="friendship" style="width: 360px; left: -12em;">
                                hello teman
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="nav-link text-secondary" id="messages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="zmdi zmdi-comment zmdi-hc-fw zmdi-hc-lg"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-md-2" aria-labelledby="messages" style="width: 360px; left: -15.75em;">
                                hello pesan
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="nav-link text-secondary" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="zmdi zmdi-globe zmdi-hc-fw zmdi-hc-lg"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-md-2" aria-labelledby="notification" style="width: 360px; left: -19.45em;">
                                hello pemberitahuan
                            </div>
                        </div>
                    </div>

                    <div class="dropdown justify-content-end">
                        <a href="#" class="nav-link" role="button" id="settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img width="26" height="24" class="rounded-circle" src="{{ asset('img/male.png') }}" alt="...">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="settings" style="left: -7em;">
                            <li class="dropdown-item">
                                <a href="#" class="nav-link p-0">
                                    <img width="26" height="24" class="rounded-circle" src="{{ asset('img/male.png') }}" alt="...">
                                    {{ Auth::user()->firstname }}
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="nav-link p-0">
                                        <i class="zmdi zmdi-info zmdi-hc-fw zmdi-hc-lg"></i>
                                        Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
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
        $(document).ready(function(){
            var menu = $('#menu'),
                menuSideNav = $('#sidenav');

            menu.on('click',function(){
                menuSideNav.toggle();
            })
        })
    </script>
</body>
</html>
