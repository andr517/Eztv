@php
  use App\Teams;

  $teams = Teams::all();
    
@endphp
@extends('layout')

@section('title', 'Profile - EZTV')

@section('content')
@if ($user = Auth::user())
<div class="columns">
  <div class="column">
    {{-- Include Header --}}
      @include('profile\header')
      {{-- Content --}}
      <div class="tile is-parent" style="max-height:300px">
          <article class="tile is-child">
            <p class="title is-4">Teams</p>
            <p class="subtitle">{{ $teams[0]->name}}</p>
             <a href="edit/"> <button class="button is-medium" name="edit">Edit</button></a>
          </article>
      </div>
  </div>
  {{-- Include Sidebaar --}}
  @include('sidebar')
</div>
@else
<div class="section is-large has-text-centered">
  <h1 class="title">You don't have permission to view this page!</h1>
</div>
@endif

@endsection
