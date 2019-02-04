<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Konfirmasi email dari {{ config('app.name', 'Laravel') }}</title>
        <!-- icon web -->
        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" size="16x14">
        <!-- ui jquery -->
        <!-- icon web -->
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <!-- Font awesome-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4>Terima kasih telah mendaftar</h4>
                        <p>Untuk melanjutkan silahkan klik link dibawah ini:</p>
                        <a href="{{ $link }}" class="btn btn-danger btn-block">Konfirmasi akun anda</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
