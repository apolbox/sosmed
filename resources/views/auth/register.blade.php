@extends('layouts.app')

@section('title', 'Mendaftar di ')

@section('content')
<div class="my-5"></div>
<div class="container">
    <div class="row">
        <div class="col-md-7 col-xs-12">
            <h2 class="text-muted">
                Pendaftaran
            </h2>
            <p class="lead">
                Buat akun di apolbox gratis untuk selamanya.
            </p>
        </div>
        <div class="col-md-5 col-xs-12">
            @include('Forms.auth.register')
        </div>
    </div>
</div>
<div class="my-5 py-2"></div>

@include('Html.footer')
@endsection
