@extends('layout')

@section('title', $user->name . ' - EZTV')

@section('content')
  <div class="columns">
    <div class="column">
      <div class="hero" style="background-image: url('{{ $user->banner }}'); background-size: cover; background-repeat: no-repeat;">
      <div class="tile is-ancestor">
        <div class="tile is-vertical">
          <div class="tile" style="">
            <div class="tile is-parent">
              <article class="tile image is-child is-4" style="max-height:250px; max-width:230px;">
                <figure class="image is-1by1">
                  <img src="{{ $user->picture }}" style="border: 20px solid transparent;">
                </figure>
              </article>
              <div class="tile" >
                <article class="tile is-child is-12">
                  <ul style="margin-top: 1rem;">
                    <li>
                      <p><strong>Username:</strong> {{ $user->userName }}</p>
                    </li>
                    <li>
                      <p><strong>Name:</strong> {{ $user->name }}</p>
                    </li>
                    @if($user->emailAnswer)
                     <li>
                       <p><strong>E-mail:</strong> {{ $user->email }}</p>
                     </li>
                    @endif
                    <li>
                      <p><strong>Registered:</strong> {{ date("Y-m-d", strtotime($user->created_at)) }}</p>
                    </li>
                    <li>
                      <p><strong>Country:</strong> <img src="{{ $user->flag }}" alt="{{ $user->country }}" style="width: 22px; height: 16px;"> {{ $user->country }}</p>
                    </li>
                    @if($user->group > 0)
                      <li>
                        <p><strong>Rank:</strong> Administrator</p>
                      </li>
                    @else
                      <li>
                        <p><strong>Rank:</strong> Member</p>
                      </li>
                     @endif
                  </ul>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    <hr>
    <h1 class="title">Information</h1>
    <p>{{ $user->info }}</p>
    <hr>
    <a href="/register">Become a member today!</a> • Already a member? <a href="/login">Login here!</a> • Want to support <strong>EZTV</strong>? Get a <span style="color: gold;">Premium</span> membership!
    </div>
    @include('sidebar')
  </div>
@endsection
