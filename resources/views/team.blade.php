@extends('layout')

@section('title', 'Team - EZTV')

@section('content')
<?php
$request = request()->route('id');
$teams = DB::table('teams')->find($request);
 ?>
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
<div class="columns is-multiline has-text-centered">
  <div class="column">
    1
  </div>
  <div class="column">
    2
  </div>
  <div class="column">
    3
  </div>
  <div class="column">
    4
  </div>
  <div class="column">
    5
  </div>
</div>
@endsection
