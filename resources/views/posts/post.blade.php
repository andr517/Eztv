@extends('layout')

@section('title', 'News - EZTV')

@section('content')
   <div class="columns">
       <div class="column">
         <figure class="image is-2by1">
           <img src="{{ $post->img }}" alt="Post image">
         </figure>
         <li><h1 class="news-title">{{ $post->title }}</h1></li>
         <li><span class="news-author">By <a href="#">{{ $post->user_id }}</a> | <span class="news-date">{{ $post->created_at }}</span></li>
         <li></span></li>
         <li><p class="news-content" style="margin-top: 15px;">{{ $post->content }}</p></li>
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
