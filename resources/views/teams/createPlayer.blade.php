@extends('layout')

@section('title', 'New Team - EZTV')

@section('content')

<form method="POST" action="<?php echo action('TeamsController@createPlayerPost', $id); ?>">
  @csrf
  <div class="field">
      <label class="label">Player Name</label>
      <div class="control">
          <input type="text" class="input" name="playerName" placeholder="Name" required>
      </div>
    </div>
    <div class="field">
        <label class="label">Ingame Name</label>
        <div class="control">
            <input type="text" class="input" name="alias" placeholder="Game Name" required>
        </div>
      </div>
      <div class="field">
          <label class="label">Age</label>
          <div class="control">
              <input type="text" class="input" name="age" placeholder="Age" required>
          </div>
        </div>
        <div class="field">
            <label class="label">Rating</label>
            <div class="control">
                <input type="text" class="input" name="rating" placeholder="Rating" required>
            </div>
          </div>
          <div class="field">
              <label class="label">FlagUrl</label>
              <div class="control">
                  <input type="text" class="input" name="flag" placeholder="Flag Url" required>
              </div>
            </div>
            <div class="field">
                <label class="label">Player Picture Url</label>
                <div class="control">
                    <input type="text" class="input" name="playerUrl" placeholder="Player Picture" required>
                </div>
              </div>
              <input type="hidden" name="team_id" value="{{$id}}">
              <div class="field">
                  <input class="button" type="submit" name="submit"
                    value="Submit">
              </div>
</form>


@endsection
