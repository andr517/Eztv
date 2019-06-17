@extends('layout')

@section('title', 'Profile - EZTV')

@section('content')
@if ($user = Auth::user())
@if (true)
  <div class="columns">
    <div class="column">
      @include('profile\header')
      <form action="{{ action('ProfileController@update') }}" method="POST" class="content" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
          <label class="label">Profile Picture</label>
          <div class="control">
            <input class="input" name="picture" type="text" value="{{ $user->picture }}">
          </div>
        </div>
        <div class="field">
          <label class="label">Full Name</label>
          <div class="control">
            <input class="input" name="name" type="text" value="{{ $user->name }}">
          </div>
        </div>

        <div class="field">
          <label class="label">Username</label>
          <div class="control">
            <input class="input" name="userName" type="text" value="{{ $user->userName }}">
          </div>
        </div>

        <div class="field">
          <label class="label">E-mail</label>
          <div class="control">
            <input class="input" name="email" type="email" value="{{ $user->email }}">
          </div>
        </div>

        <div class="field">
          <label class="label">Show E-mail In Profile?</label>
          <label class="radio">
            <input type="radio" name="answer" value="1" {{ ( $user->emailAnswer == 1 ) ? 'checked' : '' }}>
                Yes
          </label>
          <label class="radio">
            <input type="radio" name="answer" value="0" {{ ( $user->emailAnswer == 0 ) ? 'checked' : '' }}>
                No
          </label>
        </div>

        <div class="field">
          <label class="label">Country</label>
          <div class="control">
            <input class="input" placeholder="Country" name="country" value="{{ $user->country }}"/>
          </div>
        </div>

        <div class="field">
          <label class="label">Flag</label>
          <div class="control">
            <input class="input" placeholder="Url" name="flag" value="{{ $user->flag }}"/>
          </div>
        </div>

        <div class="field">
          <label class="label">Banner</label>
          <div class="control">
            <input class="input" placeholder="Url" name="banner" value="{{ $user->banner }}"/>
          </div>
        </div>

        <div class="field">
          <label class="label">Information</label>
          <div class="control">
            <textarea class="textarea" placeholder="User Info" name="info">{{ $user->info }}</textarea>
          </div>
        </div>

        <input class="button is-medium" type="submit" name="" value="Submit">
      </form>
      <hr>
    </div>
    @include('sidebar')
  </div>
  @else
    <div class="section is-large has-text-centered">
      <h1 class="title">You don't have permission to view this page!</h1>
    </div>
@endif
@endif
@endsection
