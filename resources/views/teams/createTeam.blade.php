@extends('layout')

@section('title', 'New Team - EZTV')

@section('content')
<form method="POST" action="<?php echo action('TeamsController@createTeamPost'); ?>">
  @csrf
  <div class="field">
      <label class="label">Team Name</label>
      <div class="control">
          <input type="text" class="input" name="teamName" placeholder="Team Name" required>
      </div>
  </div>
  <div class="field">
      <label class="label">Ranking</label>
      <div class="control">
          <input type="text" class="input" name="rank" Placeholder="The official ranking of the team" required>
      </div>
  </div>
  <div class="field">
      <label class="label">Team Picture</label>
      <div class="control">
          <input type="text" class="input" name="teamUrl" Placeholder="A Picture Of the Team" required>
      </div>
  </div>
  <div class="field">
      <label class="label">Team Logo</label>
      <div class="control">
          <input type="text" class="input" name="logoUrl" Placeholder="Team Logo" required>
      </div>
  </div>
  <div class="field">
      <label class="label">Country</label>
      <div class="control">
          <input type="text" class="input" name="country" Placeholder="Team Origin" required>
      </div>
  </div>
  <div class="field">
      <label class="label">Flag</label>
      <div class="control">
          <input type="text" class="input" name="flag" Placeholder="Flag Url" required>
      </div>
  </div>
  <div class="field">
      <input class="button" type="submit" name="submit"
        value="Submit">
  </div>
</form>
@endsection
