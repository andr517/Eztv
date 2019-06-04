@extends('layout')

@section('title', 'Team - EZTV')

@section('content')
<div class="columns is-multiline">
  <div class="column">

    <?php
    $request = request()->route('id');
    $teams = DB::table('teams')->find($request);
    echo $teams->name;

     ?>
  </div>
</div>
@endsection
