@extends('layout')

@section('title', 'Sign in - EZTV')

@section('content')
<div class="section">
  <div class="columns is-centered">
  <div class="card">
    <div class="card-content">
  <div class="content has-text-centered">
    <h1 class="title">Sign in</h1>
  </div>
<form method="POST" action="{{ route('login') }}">
  @csrf
  <div class="field">
    <label class="label">{{ __('E-Mail Address') }}</label>
    <div class="control">
      <input class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>
  <div class="field">
    <label class="label">{{ __('Password') }}</label>
    <div class="control">
      <input class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>
  <div class="field">
    <div class="col-md-6 offset-md-4">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
          {{ __('Remember Me') }}
        </label>
      </div>
    </div>
  </div>
  <div class="field">
    <input class="button is-fullwidth" type="submit" name="submit" value="Login">
  </div>
  @if (Route::has('password.request'))
    <a href="{{ route('password.request') }}">
      {{ __('Forgot Your Password?') }}
    </a>
  @endif
</form>
</div>
</div>
</div>
</div>
@endsection
