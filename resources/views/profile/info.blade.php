@extends('layout')

@section('title', 'Profile - EZTV')

@section('content')

<div class="columns">
  <div class="column">
    {{-- Include Header --}}
      @include('profile\header')
      {{-- Content --}}
      <div class="tile is-parent" style="max-height:300px">
          <article class="tile is-child">
            <p class="title is-4">Info</p>
            <p class="subtitle">{{ Auth::user()->info }}</p>
             <a href="/profile/edit/"> <button class="button is-medium" name="edit">Edit</button></a>
          </article>
      </div>
  </div>
  {{-- Include Sidebaar --}}
</div>

@endsection
