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
        <h1 class="title">Information</h1>
        <p>{{ Auth::user()->info }}</p>
        <hr>
        <a href="/register">Become a member today!</a> • Already a member? <a href="/login">Login here!</a> • Want to support <strong>EZTV</strong>? Get a <span style="color: gold;">Premium</span> membership!
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
