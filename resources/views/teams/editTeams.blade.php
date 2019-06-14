@extends('layout')

@section('title', 'New Team - EZTV')

@section('content')

<form method="POST" action="<?php echo action('TeamsController@editTeamSave', $id); ?>">
  @csrf
  <div class="field">
      <label class="label">Team Name</label>
      <div class="control">
          <input type="text" class="input" name="teamName" value="<?php echo $teams->name; ?>" required>
      </div>
  </div>
  <div class="field">
      <label class="label">Ranking</label>
      <div class="control">
          <input type="text" class="input" name="rank" value="<?php echo $teams->rank; ?>" required>
      </div>
  </div>
  <div class="field">
      <label class="label">Team Picture</label>
      <div class="control">
          <input type="text" class="input" name="teamUrl" value="<?php echo $teams->teamUrl; ?>" required>
      </div>
  </div>
  <div class="field">
      <label class="label">Team Logo</label>
      <div class="control">
          <input type="text" class="input" name="logoUrl" value="<?php echo $teams->logoUrl; ?>" required>
      </div>
  </div>
  <div class="field">
      <label class="label">Country</label>
      <div class="control">
          <input type="text" class="input" name="country" value="<?php echo $teams->country; ?>" required>
      </div>
  </div>
  <div class="field">
      <label class="label">Flag</label>
      <div class="control">
          <input type="text" class="input" name="flag" value="<?php echo $teams->flag; ?>" required>
      </div>
  </div>
  <div class="field">
      <input class="button" type="submit" name="submit"
        value="Submit">
  </div>
</form>

@endsection
