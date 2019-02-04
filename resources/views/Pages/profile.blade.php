@extends('layouts.homepage')

@section('title', 'Profile | ')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="sampul bg-white border w-100">
                    <div class="foto-profil position-absolute img-responsive border justify-content-center rounded bg-white py-md-3">
                        <img width="120px" class="mx-auto d-flex align-self-start" src="{{ url('img/male.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-xs-12 mt-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Tentang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Teman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Foto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection