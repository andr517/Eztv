@extends('layout')

@section('title', $teams->name . ' - EZTV')

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
    <div class="media">
      <div class="media-left">
      </div>
      <div class="media-content">
        <p class="subtitle is-5">{{$player->alias}} <img style="width:15px;height:10px;" src="{{$player->flag}}"></p>
        <p class="subtitle is-6">{{$player->name}}</p>
        <p>{{$player->age}}</p>
        <p>{{$player->rating}}</p>
      </div>
    </div>
  </div>
</div>

  </div>
  @endforeach
</div>
@endsection
