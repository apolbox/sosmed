<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col">
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="name">Nama depan</label>

                            <input id="firstname" type="text" class="form-control form-control-sm" name="firstname" value="{{ old('name') }}" placeholder="Nama depan" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="name">Nama belakang</label>

                            <input id="lastname" type="text" class="form-control form-control-sm" name="lastname" value="{{ old('name') }}" placeholder="Nama belakang" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username">Nama pengguna</label>

                    <input id="username" type="text" class="form-control form-control-sm" name="username" value="{{ old('username') }}" placeholder="Nama pengguna" required>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email</label>

                    <input id="email" type="email" class="form-control form-control-sm" name="email" value="{{ old('email') }}" placeholder="Masukan email anda" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Kata sandi</label>

                    <input id="password" type="password" class="form-control form-control-sm" name="password" placeholder="Buat kata sandi" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group">
                    <label for="password-confirm">Konfirmasi kata sandi</label>

                    <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" placeholder="Konfirmasi kata sandi" required>
                </div>

                <div class="form-group custom-control custom-checkbox mr-sm-2{{ $errors->has('license') ? ' has-error' : '' }}">
                    <input type="checkbox" id="customControlAutosizing" class="custom-control-input" name="license" value="yes" checked>
                    <label class="custom-control-label" for="customControlAutosizing">Dengan klik mendaftar berarti anda telah menerima syarat dan ketentuan dari kami.</label>

                    @if ($errors->has('license'))
                        <span class="help-block">
                            <strong>{{ $errors->first('license') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-primary">
                            Mendaftar
                    </button>
                </div>
            </form>
