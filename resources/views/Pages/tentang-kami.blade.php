@extends('layouts.app')

@section('title', 'Tentang ')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-8 col-xs-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang kami</li>
                  </ol>
                </nav>
                
                <p class="text-dark text-justify lead">
                    Berawal dari sebuah group di facebook yang bernama <a href="https://www.facebook.com/groups/806404549412713/" class="text-link">Apolbox</a> sebuah group yang awalnya hanya untuk hiburan semata,
                    kami mulai berfikir bagaimana jika kami mempunyai situs sendiri daripada kami hanya menumpang difacebook.
                    <br><br>
                    Maka dari itu kami mengolah situs web kami sendiri yang dikhususkan untuk anggota kami dari group difacebook.
                    Tidak terfikir untuk lebih dari itu karena tujuan kami hanya ingin menyediakan layanan khusus bagi anggota kami.
                    <br><br>
                    Mungkin tujuan kami belum tercapai tapi kami berjanji akan mewujudkan impian itu.
                </p>
            </div>
        </div>
    </div>
    
    <div class="my-5 py-2"></div>
    @include('Html.footer')
@endsection