@extends('layouts.app')

@section('title','Selamat datang di ')

@section('content')
    @include('Html.welcome')
    @include('Html.mengapa_kami')
    <div class="py-4"></div>
    @include('Html.footer')
@endsection
