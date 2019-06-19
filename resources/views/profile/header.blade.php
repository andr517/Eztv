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

  <div class="hero" style="background-image: url('{{Auth::user()->banner }}'); background-size: cover; background-repeat: no-repeat;">
    <div class="tile is-ancestor">
      <div class="tile is-vertical">
        <div class="tile">
          <div class="tile is-parent">
            <article class="tile image is-child is-4" style="max-height:250px; max-width:230px;">
              <figure class="image is-1by1">
                <img src="{{ Auth::user()->picture }}" style="border: 20px solid transparent;">
              </figure>
            </article>
            <div class="tile" >
              <article class="tile is-child is-12">
                <ul style="margin-top: 1rem;">
                  <li>
                    <p><strong>Username:</strong> {{ Auth::user()->userName }}</p>
                  </li>
                  <li>
                    <p><strong>Name:</strong> {{ $user->name }}</p>
                  </li>
                  @if(Auth::user()->emailAnswer)
                   <li>
                     <p><strong>E-mail:</strong> {{ Auth::user()->email }}</p>
                   </li>
                  @endif
                  <li>
                    <p><strong>Registered:</strong> {{ date("Y-m-d", strtotime(Auth::user()->created_at)) }}</p>
                  </li>
                  <li>
                    <p><strong>Country:</strong> <img src="{{ Auth::user()->flag }}" alt="{{ Auth::user()->country }}" style="width: 22px; height: 16px;"> {{ Auth::user()->country }}</p>
                  </li>
                  @if(Auth::user()->group > 0)
                    <li>
                      <p><strong>Rank:</strong> <i class="fa fa-crown" style="font-size: 18px;" color="gold"></i> Administrator</p>
                    </li>
                  @else
                    <li>
                      <p><strong>Rank:</strong> <i class="fa fa-user" style="font-size: 18px;" color="#00b0cd"></i> Member</p>
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
          <a class="navbar-item" href="/profile">
            Information
          </a>
          <a class="navbar-item" href="/profile/edit/">
            Settings
          </a>
        </div>
      </div>
    </nav>
    <hr>
