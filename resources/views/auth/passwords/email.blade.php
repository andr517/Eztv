@extends('layout')

@section('title', 'Reset Password - EZTV')

@section('content')
<div class="section is-medium">
  <div class="columns is-centered">
  <div class="card">
    <div class="card-content">
  <div class="content has-text-centered">
    <h1 class="title">Reset Password</h1>
  </div>
  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif
  <form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="field">
      <label for="email" class="label">{{ __('E-Mail Address') }}</label>
      <div class="control">
        <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="field">
      <input class="button" type="submit" name="submit" value="Send Password Reset Link">
    </div>
  </form>
</div>
</div>
</div>
</div>
@endsection
