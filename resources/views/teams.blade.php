@extends('layout')

@section('title', 'Teams - EZTV')

@section('content')
<div class="columns is-multiline">
<?php foreach ($teams as $team) { ?>
  <div class="column is-3">
<div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="<?php echo $team->teamUrl; ?>" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img src="<?php echo $team->logoUrl; ?>" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <a href="{{ URL('/teams/team/'.$team->id )}}"><p class="title is-4"><?php echo $team->name; ?></p></a>
        <p class="subtitle is-6">Rank: <?php echo $team->rank; ?></p>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>
</div>
@endsection
