@extends('layouts.app')

@section('content')
<div class="my-5"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 col-xs-12">
            <div class="card">
                <div class="card-header">Atur ulang kata sandi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>

                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Masukan email anda" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
