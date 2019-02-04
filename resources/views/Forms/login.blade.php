<form class="" action="{{ route('login') }}" method="POST">
	{{ csrf_field() }}
	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		<input type="email" class="form-control form-control-sm" name="email" placeholder="Masukan email anda">
		@if ($errors->has('email'))
			<span class="help-block text-light">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
		@endif
	</div>
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		<input type="password" class="form-control form-control-sm" name="password" placeholder="Kata sandi">
		@if ($errors->has('password'))
			<span class="help-block text-light">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
		@endif
	</div>
	<div class="form-group custom-control custom-checkbox mr-sm-2">
		<input type="checkbox" id="remember" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
		<label class="custom-control-label text-light" for="remember">Ingat saya</label>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-sm btn-block btn-success" value="Masuk">
	</div>
	<div class="form-group">
		<a href="{{ route('password.request') }}" class="text-light">Lupa kata sandi ?</a>
		<p class="text-light">
			Belum punya akun ? <a href="{{ url('register') }}" class="text-light">Daftar sekarang</a>
		</p>
	</div>
</form>
