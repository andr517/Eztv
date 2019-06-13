@extends('layout')

@section('title', 'Profile - EZTV')

@section('content')
@if ($user = Auth::user())
@if (true)
<form action="{{ action('ProfileController@update') }}" method="POST" class="content" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="field">
            <label class="label">Profile Picture</label>
            <div class="control">
              <input class="input" name="picture" type="text" value="{{ $user->picture }}">
            </div>
          </div>
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
              <input class="input" name="name" type="text" value="{{ $user->name }}">
              </div>
            </div>

            <div class="field">
              <label class="label">Email</label>
              <div class="control">
                <input class="input" name="email" type="email" value="{{ $user->email }}">
              </div>
            </div>
            

            <div class="field">
              <label class="label">Show Email In Profile?</label>
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
              <label class="label">Info</label>
              <div class="control">
                <textarea class="textarea" placeholder="User Info" name="info">{{ $user->info }}</textarea>
              </div>
            </div>
                 
            <input class="button is-medium" type="submit" name="">
          </form>
          @endif
  @endif
@endsection
