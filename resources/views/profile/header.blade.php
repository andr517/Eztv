@php
  use Illuminate\Http\Request;
  use App\User;
  use Illuminate\Support\Facades\DB;
  use App\Http\Controllers\Controller;
  use Illuminate\Support\Facades\Hash;
  use Illuminate\Support\Facades\Validator;
  use Illuminate\Foundation\Auth\RegistersUsers;
  use App\News;
@endphp


<div class="hero" style="background-image: url('{{Auth::user()->banner }}'); background-size: contain;">
    <div class="tile is-ancestor">
        <div class="tile is-vertical">
          <div class="tile" style="">
            <div class="tile is-parent">
              <article class="tile image is-child is-4" style="max-height:250px; max-width:230px;">
                <figure class="image is-4" style="margin-right: 2rem">
                  <img src="{{ Auth::user()->picture }}">
                </figure>
              </article>
            <div class="tile" >
              <article class="tile is-child is-12">
                <h2 class="title is-4" style="margin-top: 1rem;">Name:</h2>
                <h2 class="subtitle">{{ Auth::user()->name }}</h2>
                <h2 class="title is-4" style="margin-top: 1rem;">Country:</h2>
                <h2 class="subtitle">{{ Auth::user()->country }}</h2>
                @if(Auth::user()->emailAnswer)
                <h2 class="title is-4">Email:</h2>
                <h2 class="subtitle">{{ Auth::user()->email }}</h2>
                @endif
              </article>
            </div>
            <div class="tile" >
              <article class="tile is-child is-12">
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div>
    <nav class="navbar" style="position: relative;"role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="/profile/info/">
              Info
            </a>
            <a class="navbar-item" href="/profile/teams/">
              Teams
            </a>
            <a class="navbar-item">
              Guest Log
            </a>
          </div>
      
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-primary">
                  <strong>Sign up</strong>
                </a>
                <a class="button is-light">
                  Log in
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
</div>




