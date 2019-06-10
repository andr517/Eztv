@extends('layout')

@section('title', 'Profile - EZTV')

@section('content')
@if ($user = Auth::user()) 
<div class="columns">
  <div class="column">
    <div class="tile is-ancestor">
        <div class="tile is-vertical">
          <div class="tile" style="max-height:250px">
            <div class="tile is-parent">
              <article class="tile image is-child is-4">
                <figure class="image is-4">
                  <img src="{{ Auth::user()->picture }}">
                </figure>
              </article>
            <div class="tile" >
              <article class="tile is-child is-12">
                <h2 class="title">{{ Auth::user()->name }}</h2>
                <p>{{ Auth::user()->info }}</p>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tile is-parent" style="max-height:300px">
        <article class="tile is-child">
          <p class="title">Wide tile</p>
          <p class="subtitle">Aligned with the right tile</p>
          <form class="content">
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" type="text" placeholder="e.g Alex Smith">
              </div>
            </div>
            
            <div class="field">
              <label class="label">Email</label>
              <div class="control">
                <input class="input" type="email" placeholder="e.g. alexsmith@gmail.com">
              </div>
            </div>
          </form>
        </article>
    </div>
  </div>
  <div class="column is-one-quarter">
    <div class="tile is-parent">
      <article class="tile is-child">
        <div class="content">
          <div class="content">
            <!-- Content -->
            <h2 class="subtitle">Players of the Week</h2>
            <div class="is-divider" data-content="OR">dfasf</div>
            <img src="https://static.hltv.org/images/playerprofile/thumb/8520/400.jpeg?v=7" alt="">
            <ul>
              <li><strong>Name: </strong>Виктор</li>
              <li><strong>Age: </strong>14</li>
              <li><strong>Team: </strong>Гоблинские Решения</li>
              <li><strong>From: </strong>Russia</li>
            </ul>
            <hr>
            <img src="https://static.hltv.org/images/playerprofile/thumb/11188/400.jpeg?v=3" alt="">
            <ul>
              <li><strong>Name: </strong>Björn Olsson</li>
              <li><strong>Age: </strong>26</li>
              <li><strong>Team: </strong>Lidl</li>
              <li><strong>From: </strong>Sweden</li>
            </ul>
          </div>
        </div>
      </article>
    </div>
  </div>
</div>
@endif
@endsection
