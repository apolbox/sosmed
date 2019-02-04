@extends('layouts.app')

@section('title', 'Masuk akun di ')

@section('content')
<div class="my-5"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <h2 class="text-muted">
                Masuk
            </h2>
            <p class="lead">
                Masuk ke account anda untuk melanjutkan.
            </p>
        </div>
        <div class="col-md-4 col-xs-12">
            @include('Forms.auth.login')
        </div>
    </div>
</div>
<div style="margin-bottom: 21em;"></div>
@include('Html.footer')
@endsection
