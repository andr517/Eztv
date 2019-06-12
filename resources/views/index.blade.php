@extends('layout')

@section('title', 'Home - EZTV')

@section('content')

<div class="columns">
    <div class="column">
        <figure class="image is-2by2">
            <img src="https://i2.wp.com/www.vpesports.com/wp-content/uploads/2019/06/dhmd_liquid.jpg?resize=1200%2C550&ssl=1"           alt="Banner">
            </img>
            <hr>
            @if(Auth::check() && Auth::user()->group > 0)
              <a href="/posts/create"><button type="button" class="button" name="button">New Post</button></a>
            @endif
            @foreach($news->sortByDesc('id') as $post)
            <div class="columns is-multiline">
                <div class="column">
                    <figure class="image is-2by1">
                        <a href="{{ URL('/posts/'.$post->id )}}"><img src="{{ $post->img }}" alt="Thumbnail"></a>
                    </figure>
                </div>
                <div class="column">
                    <li><span class="news-date">{{ date("Y-m-d", strtotime($post->created_at)) }}</span></li>
                    <h1 class="news-title"><a href="{{ URL('/posts/'.$post->id )}}">{{ $post->title }}</a></h1>
                    <span class="news-content">{{ $post->content }}</span>
                    <li><span class="news-author">By <a href="#">{{ $post->user->name }}</a></span></li>
                    @if(Auth::check() && Auth::user()->group > 0)
                      <br>
                      <a href="{{ URL('/posts/edit/'.$post->id)}}"><button type="button" class="button is-small"
                          name="button">Edit</button></a>
                      <a href="{{ URL('/posts/delete/'.$post->id)}}"><button type="button" class="button is-small"
                          name="button">Delete</button></a>
                    @endif
                </div>
                <hr>
            </div>
            @endforeach
    </div>

    <div class="column is-one-quarter">
        <div class="list is-hoverable">
            <li class="list-item list-title">Ranking</li>
            <?php $i = 1; ?>
            @foreach($teams as $team)
              <?php if($i > 5)
              break;
              ?>
              <a class="list-item" href="{{ URL('/teams/team/'.$team->id )}}">
                {{ $i++ }}.
                <img src="{{ $team->logoUrl }}" alt="{{ $team->name }}"
                  style="width:14px; height: 14px;">
                  {{ $team->name }}
              </a>
            @endforeach
        </div>
        <hr>
        <div class="list is-hoverable">
            <li class="list-item list-title">Today's Matches</li>
            <a class="list-item">
                <img src="https://static.hltv.org/images/team/logo/5973" alt=""
                  style="width:14px; height: 14px;"> Liquid vs. <img src="https://static.hltv.org/images/team/logo/6665"
                  alt="" style="width:14px; height: 14px;"> Astralis 13:00
            </a>
            <a class="list-item">
                <img src="https://static.hltv.org/images/team/logo/6665" alt=""
                  style="width:14px; height: 14px;"> Astralis vs. <img src="https://static.hltv.org/images/team/logo/4869"
                  alt="" style="width:14px; height: 14px;"> ENCE 14:30
            </a>
            <a class="list-item">
                <img src="https://static.hltv.org/images/team/logo/4869" alt=""
                  style="width:14px; height: 14px;"> ENCE vs. <img src="https://static.hltv.org/images/team/logo/6667"
                  alt="" style="width:14px; height: 14px;"> FaZe 14:00
            </a>
            <a class="list-item">
                <img src="https://static.hltv.org/images/team/logo/9565" alt=""
                  style="width:14px; height: 14px;"> Vitality vs. <img src="https://static.hltv.org/images/team/logo/5973"
                  alt="" style="width:14px; height: 14px;"> Liquid 18:30
            </a>
        </div>
        <h2 class="news-title">Player of the Week</h2>
        <div class="card">
            <figure class="image is-1by1">
                <img src="https://static.hltv.org/images/playerprofile/thumb/8520/400.jpeg?v=7"
                  alt="">
            </figure>
            <div class="card-content has-text-centered player-week">
                <li><img src="https://static.hltv.org/images/bigflags/30x20/DK.gif"
                      alt="" style="width:14px; height: 14px;"> <strong>BhopgudN</strong></li>
                <li><img src="https://static.hltv.org/images/team/logo/6667"
                      alt="" style="width:14px; height: 14px;"> <strong>Team
                        FaZe</strong></li>
            </div>
        </div>
        <ul class="social">
            <li> <a href="#" title="">
                    <i class="icon fab fa-twitter"> </i>
                </a></li>
            <li> <a href="#" title="">
                    <i class="icon fab fa-facebook"> </i>
                </a></li>
            <li> <a href="#" title="">
                    <i class="icon fab fa-youtube"> </i>
                </a></li>
            <li> <a href="#" title="">
                    <i class="icon fab fa-instagram"> </i>
                </a></li>
            <li> <a href="#" title="">
                    <i class="icon fab fa-discord"> </i>
                </a></li>
        </ul>
    </div>
</div>

@endsection
