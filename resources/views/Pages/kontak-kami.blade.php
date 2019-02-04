@extends('layouts.app')

@section('title', 'Kontak ')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-8 col-xs-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kontak kami</li>
                  </ol>
                </nav>
                
                <p class="text-dark text-justify lead">
                    Kami menyediakan sebuah layanan untuk dapat menghubungi kami dari :
                    
                    <ul>
                        <li><a href="https://www.facebook.com/ayus.filla" class="text-link">Facebook</a></li>
                        <li><a href="https://github.com/apolbox/sosmed.git">Github</a></li>
                    </ul>
                    
                    Layanan diatas dimaksudkan untuk meningkatkan kualitas dari apolbox dalam melayani pengunjung kami.
                </p>
            </div>
        </div>
    </div>
    
    <div class="my-5 py-2"></div>
    @include('Html.footer')
@endsection