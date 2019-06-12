@extends('layout')

@section('title', 'Profile - EZTV')

@section('content')
@if ($user = Auth::user())
          @if (true)
          <form action="{{ action('ProfileController@update') }}" method="POST" class="content" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" name="name" type="text" placeholder="e.g Alex Smith">
              </div>
            </div>

            <div class="field">
              <label class="label">Email</label>
              <div class="control">
                <input class="input" name="email" type="email" placeholder="e.g. alexsmith@gmail.com">
              </div>
            </div>

            <div class="field">
              <label class="label">Info</label>
              <div class="control">
                <input class="input" name="info" type="text" placeholder="e.g. alexsmith@gmail.com">
              </div>
            </div>

            <div class="field">
              <label class="label">Profile Picture</label>
              <div class="control">
                <input class="input" name="picture" type="text" placeholder="e.g. alexsmith@gmail.com">
              </div>
            </div>
            <input class="button is-medium" type="submit" name="" id="">
          </form>
          @endif
  @endif
@endsection
