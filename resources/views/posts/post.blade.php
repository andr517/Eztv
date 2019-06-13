@extends('layout')

@section('title', $post->title . ' - EZTV')

@section('content')
   <div class="columns">
       <div class="column">
         <figure class="image is-2by1">
           <img src="{{ $post->img }}" alt="Post image">
         </figure>
         <hr>
         <li>
           <h1 class="news-title">{{ $post->title }}</h1>
         </li>
         <li>
          <span class="news-author">By <a href="{{ URL('/users/'.$user[0]->user->id )}}">{{ $user[0]->user->name }}</a>
          <span class="news-date">{{ date("Y-m-d", strtotime($post->created_at)) }}</span>
         </li>
         <li>
           <p class="news-content" style="margin-top: 15px;">{{ $post->content }}</p>
         </li>
         <hr>
       </div>
       @include('sidebar')
   </div>
@endsection
