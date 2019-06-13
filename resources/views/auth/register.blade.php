@extends('layout')

@section('title', 'Register - EZTV')

@section('content')
<div class="section">
  <div class="columns is-centered">
  <div class="card">
    <div class="card-content">
  <div class="content has-text-centered">
    <h1 class="title">Register</h1>
  </div>
<form method="POST" action="{{ route('register') }}">
  @csrf
  <div class="field">
    <label class="label">{{ __('Full Name') }}</label>
    <div class="control">
      <input class="input form-control @error('fullName') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
      <input class="input form-control @error('picture') is-invalid @enderror" type="hidden" name="picture" value="https://www.flynz.co.nz/wp-content/uploads/profile-placeholder.png" required autocomplete="picture" autofocus>
      <input class="input form-control @error('flag') is-invalid @enderror" type="hidden" name="flag" value="https://www.651vinyl.com/images/D/BW_Checkerboard_500-01.jpg" required autocomplete="flag" autofocus>
      <input class="input form-control @error('banner') is-invalid @enderror" type="hidden" name="banner" value="http://www.thegosucrew.com/wp-content/uploads/2018/01/GosuCrew_Twitter_Banner-Plain.png" required autocomplete="banner" autofocus>
      @error('fullName')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>
  <div class="field">
    <label class="label">{{ __('User Name') }}</label>
    <div class="control">
      <input class="input form-control @error('userName') is-invalid @enderror" name="userName" value="{{ old('userName') }}" required autocomplete="userName">
      @error('userName')
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
    <label class="label">{{ __('Country') }}</label>
    <div class="control">
      <input class="input form-control" name="country">
      @error('country')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>
  <div class="field">
    <label class="label">{{ __('Password') }}</label>
    <div class="control">
      <input class="input form-control" name="password_confirmation" required autocomplete="new-password" type="password">
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
      <input class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password">
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
</div>
</div>
</div>
@endsection
