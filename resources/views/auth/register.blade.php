@extends('layout')

@section('title', 'Register - EZTV')

@section('content')
<div class="section">
  <div class="content has-text-centered">
    <h1 class="title">Register</h1>
  </div>
<form method="POST" action="{{ route('register') }}">
  @csrf
  <div class="field">
    <label class="label">{{ __('Name') }}</label>
    <div class="control">
      <input class="input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>
  <div class="field">
    <label class="label">{{ __('E-Mail Address') }}</label>
    <div class="control">
      <input class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
      <input class="input form-control" name="password_confirmation" required autocomplete="new-password">
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>
  <div class="field">
    <label class="label">{{ __('Confirm Password') }}</label>
    <div class="control">
      <input class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>
  <div class="field">
    <input class="button" type="submit" name="submit" value="{{ __('Register') }}">
  </div>
</form>
</div>
@endsection
