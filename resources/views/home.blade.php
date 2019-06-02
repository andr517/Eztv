@extends('layout')

@section('title', 'Profile - EZTV')

@section('content')
<div class="section has-text-centered is-medium">
  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif
  <h1 class="title">You are logged in!</h1>
</div>
@endsection
