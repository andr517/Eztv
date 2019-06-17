@extends('layout')

@section('title', 'New Team - EZTV')

@section('content')
@if ($user = Auth::user() && Auth::user()->group > 0)
<form method="POST" action="<?php echo action('TeamsController@editPlayerSave', $id); ?>">
  @csrf
  <div class="field">
      <label class="label">Name</label>
      <div class="control">
          <input type="text" class="input" name="name" value="<?php echo $players->name; ?>" required>
      </div>
    </div>
    <div class="field">
        <label class="label">Game Name</label>
        <div class="control">
            <input type="text" class="input" name="alias" value="<?php echo $players->alias; ?>" required>
        </div>
      </div>
      <div class="field">
          <label class="label">Age</label>
          <div class="control">
              <input type="text" class="input" name="age" value="<?php echo $players->age; ?>" required>
          </div>
        </div>
        <div class="field">
            <label class="label">Rating</label>
            <div class="control">
                <input type="text" class="input" name="rating" value="<?php echo $players->rating; ?>" required>
            </div>
          </div>
          <div class="field">
              <label class="label">Flag Url</label>
              <div class="control">
                  <input type="text" class="input" name="flag" value="<?php echo $players->flag; ?>" required>
              </div>
            </div>
            <div class="field">
                <label class="label">Player Picture Url</label>
                <div class="control">
                    <input type="text" class="input" name="playerUrl" value="<?php echo $players->playerUrl; ?>" required>
                </div>
              </div>
              <div class="field">
                  <input class="button" type="submit" name="submit"
                    value="Submit">
              </div>
</form>
@else
<div class="section is-large has-text-centered">
    <h1 class="title">You don't have permission to view this page!</h1>
</div>
@endif


@endsection
