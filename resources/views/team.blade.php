@extends('layout')

@section('title', 'Team - EZTV')

@section('content')
 <div class="section">
 <nav class="level">
   <div class="level-item has-text-centered">
     <div>
       <figure class="image is-64x64">
         <img src="<?php echo $teams->logoUrl; ?>" alt="Placeholder image">
       </figure>
     </div>
   </div>
   <div class="level-item has-text-centered">
     <div>
       <p class="heading">Team</p>
       <p class="title"><?php echo $teams->name; ?></p>
     </div>
   </div>
   <div class="level-item has-text-centered">
     <div>
       <p class="heading">Country <img src="<?php echo $teams->flag; ?>" style="width:25px;height:15px;"></p>
       <p class="title"><?php echo $teams->country; ?></p>
     </div>
   </div>
   <div class="level-item has-text-centered">
     <div>
       <p class="heading">Ranking</p>
       <p class="title"><?php echo $teams->rank; ?>#</p>
     </div>
   </div>
 </nav>
</div>
@if ($user = Auth::user() && Auth::user()->group > 0)
    <a href="{{ URL('/teams/team/createPlayer/'.$teams->id)}}"><button type="button" class="button" name="button">Add Player</button></a>
@endif
<div class="columns is-multiline">
  @foreach ($players as $player)
  <div class="column">

    <div class="card">
  <div class="card-image">
    <figure class="image is-3by3">
      <img src="{{$player->playerUrl}}" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
      <div class="media-content has-text-centered">
        <p class="subtitle is-5">{{$player->alias}} <img style="width:22px;height:15px;" src="{{$player->flag}}"></p>
        <p class="subtitle is-6">{{$player->name}}</p>
      </div>
      <div class="card-footer">
        <p class="card-footer-item">Age  {{$player->age}}</p>
        <p class="card-footer-item">Rating  {{$player->rating}}</p>
      </div>
      @if ($user = Auth::user() && Auth::user()->group > 0)
      <div class="has-text-centered">
        <a href="{{ URL('/teams/team/editPlayers/'.$player->id)}}"><button type="button" class="button" name="button">Edit</button></a>
        <a href="{{ URL('/teams/team/deletePlayers/'.$player->id)}}"><button type="button" class="button" name="button">Delete</button></a>
    </div>
    @endif
  </div>
</div>

  </div>
  @endforeach
</div>
@endsection
