@php
  use App\News;
  use App\User;
  use App\Teams;
  use App\Players;

  $users = User::orderBy('userName', 'ASC')->get();
  $news = News::all();
  $teams = Teams::all();
  $player = Players::with('teams')->find(2);
@endphp

<div class="column is-one-quarter">
  <div class="list is-hoverable">
    <li class="list-item list-title" style="border-bottom: 1px solid #dbdbdb">Ranking</li>
    <?php $i = 1; ?>
    @foreach($teams as $team)
      <?php if($i > 5)
        break;
      ?>
      <a class="list-item" href="{{ URL('/teams/team/'.$team->id )}}">
        {{ $i++ }}.
        <img src="{{ $team->logoUrl }}" alt="{{ $team->name }}" style="width:14px; height: 14px;">
        {{ $team->name }}
      </a>
    @endforeach
  </div>
  <hr>
  <div class="list is-hoverable">
    <li class="list-item list-title">Today's Matches</li>
    <a class="list-item">
      <img src="https://static.hltv.org/images/team/logo/5973" alt="" style="width:14px; height: 14px;"> Liquid vs. <img src="https://static.hltv.org/images/team/logo/6665" alt="" style="width:14px; height: 14px;"> Astralis 13:00
    </a>
    <a class="list-item">
      <img src="https://static.hltv.org/images/team/logo/6665" alt=""
      style="width:14px; height: 14px;"> Astralis vs. <img src="https://static.hltv.org/images/team/logo/4869" alt="" style="width:14px; height: 14px;"> ENCE 14:30
    </a>
    <a class="list-item">
      <img src="https://static.hltv.org/images/team/logo/4869" alt=""
        style="width:14px; height: 14px;"> ENCE vs. <img src="https://static.hltv.org/images/team/logo/6667" alt="" style="width:14px; height: 14px;"> FaZe 14:00
    </a>
    <a class="list-item">
      <img src="https://static.hltv.org/images/team/logo/9565" alt=""
        style="width:14px; height: 14px;"> Vitality vs. <img src="https://static.hltv.org/images/team/logo/5973" alt="" style="width:14px; height: 14px;"> Liquid 18:30
    </a>
  </div>
  <hr>
  <div class="list is-hoverable">
    <li class="list-item list-title" style="border-bottom: 1px solid #dbdbdb">Members</li>
    @foreach($users as $user)
      <a class="list-item" href="{{ URL('/users/'.$user->id )}}">
        <img src="{{ $user->flag }}" style="height: 14px; width: 20px;" alt=""> {{ $user->userName }}
      </a>
    @endforeach
  </div>
  <hr>
  <h2 class="news-title" style="text-align: center;">Player of the Week</h2>
  <div class="card">
    <figure class="image is-1by1">
      <a href="{{ URL('/teams/team/'.$player->teams->id )}}"><img src="{{ $player->playerUrl }}" alt="{{ $player->alias }}"></a>
    </figure>
    <div class="card-content has-text-centered player-week">
      <li>
        <img src="{{ $player->flag }}"
          alt="" style=" height: 14px;"> <strong style="font-size: 20px;">{{ $player->alias }}</strong>
        </li>
        <li>
          {{ $player->name }}
        </li>
        <li>
          <img src="{{ $player->teams->logoUrl }}" alt="{{ $player->teams->name }}" style="width:14px; height: 14px;"> <a href="{{ URL('/teams/team/'.$player->teams->id )}}">{{ $player->teams->name }}</a>
        </li>
      </div>
  </div>
  <ul class="social">
    <li>
      <a href="#">
        <i class="icon fab fa-twitter"></i>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="icon fab fa-facebook"></i>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="icon fab fa-youtube"></i>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="icon fab fa-instagram"></i>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="icon fab fa-discord"></i>
      </a>
    </li>
  </ul>
</div>
