@extends('layout')

@section('title', 'Home - EZTV')

@section('content')

<div class="columns">
  <div class="column">
    <figure class="image is-2by2">
      <img src="https://i2.wp.com/www.vpesports.com/wp-content/uploads/2019/06/dhmd_liquid.jpg?resize=1200%2C550&ssl=1" alt="Banner">
        <p class="welcome-text subtitle has-text-centered is-overlay">Liquid &ENCE receive first two invites to IEM Chicago</p>
      </img>
    </figure>
    <hr>
    @if(Auth::check() && Auth::user()->group > 0)
      <a href="/posts/create"><button type="button" class="button"name="button">New Post</button></a>
    @endif
    @foreach($news->sortByDesc('id') as $post)
      <div class="columns is-multiline">
        <div class="column">
          <figure class="image is-2by1">
            <a href="{{ URL('/posts/'.$post->id ) }}"><img src="{{ $post->img }}" alt="Thumbnail"></a>
          </figure>
        </div>
        <div class="column">
          <li>
            <span class="news-date">{{ date("Y-m-d", strtotime($post->created_at)) }}</span>
          </li>
          <h1 class="news-title"><a href="{{ URL('/posts/'.$post->id )}}">{{ $post->title }}</a></h1>
          <span class="news-content">{{ $post->content }}</span>
          <li>
            <span class="news-author">By <a href="{{ URL('/users/'.$post->user->id )}}">{{ $post->user->name }}<a></span>
          </li>
          @if(Auth::check() && Auth::user()->group > 0)
            <br>
            <a href="{{ URL('/posts/edit/'.$post->id) }}"><button type="button" class="button is-small" name="button">Edit</button></a>
            <a href="{{ URL('/posts/delete/'.$post->id) }}"><button type="button" class="button is-small" name="button">Delete</button></a>
          @endif
        </div>
        <hr>
      </div>
    @endforeach
  </div>
  @include('sidebar')
</div>

@endsection
