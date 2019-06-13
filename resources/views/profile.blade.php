@extends('layout')

@section('title', 'Profile - EZTV')

@section('content')
@if ($user = Auth::user())
<div class="columns">
    <div class="column">
      {{-- Include Header --}}
        @include('profile\header')
        {{-- Content --}}
        {{-- // --}}
    </div>
    {{-- Include Sidebar --}}
    @include('sidebar')
  </div>
  @else
  <div class="section is-large has-text-centered">
    <h1 class="title">You don't have permission to view this page!</h1>
  </div>
@endif
@endsection
