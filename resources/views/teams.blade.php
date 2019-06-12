@extends('layout')

@section('title', 'Teams - EZTV')

@section('content')
<div class="columns is-multiline">
    @foreach ($teams as $team)
    <div class="column is-3">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="{{$team->teamUrl}}" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="{{$team->logoUrl}}" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <a href="{{ URL('/teams/team/'.$team->id )}}" class="team-link">
                            <p class="title is-4 team-name">{{$team->name}}</p>
                        </a>
                        <p class="subtitle is-6">Rank: {{$team->rank}}</p>
                    </div>
                </div>
                @if ($user = Auth::user() && Auth::user()->group > 0)
                <div class="has-text-centered">
                  <a class="button" href="#">Edit</a>
                  <a class="button" href="#">Remove</a>
              </div>
              @endif
            </div>
        </div>
    </div>
    @endforeach
    @if ($user = Auth::user() && Auth::user()->group > 0)
    <div class="column is-3">
        <div class="card">
            <div class="card-image">
                <figure class="image is-256x128">
                  <img src="https://image.flaticon.com/icons/svg/60/60732.svg" alt="">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                    </div>
                    <div class="media-content  has-text-centered">
                      <a href="/createTeam"><button type="button" class="button" name="button">Add New Team</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
