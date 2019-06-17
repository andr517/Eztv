@extends('layout')

@section('title', 'Matches - EZTV')

@section('content')
<h2 class="title is-5">
    <?php echo date('Y-m-d'); ?>
</h2>
<table class="table is-responsive" style="      margin-left: auto;
      margin-right: auto;">
    <thead>
        <tr>
            <th>Team1</th>
            <th>VS</th>
            <th>Team2</th>
            <th>Event</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($matches as $match)
        <tr>
            <td>{{$match->team1}}</td>
            <td>vs</td>
            <td>{{$match->team2}}</td>
            <td>{{$match->event}}</td>
            <td>{{$match->time}}</td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection
