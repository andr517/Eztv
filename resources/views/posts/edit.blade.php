@extends('layout')

@section('title', 'Edit Post - EZTV')

@section('content')
@if ($user = Auth::user() && Auth::user()->group > 0)
  <div class="columns">
    <div class="column">
      <h1 class="title">Edit Post</h1>
      <form method="POST" action="<?php echo action('PostsController@editsave', $id); ?>">
        @method('POST')
        @csrf
        <div class="field">
          <label class="label">Title</label>
          <div class="control">
            <input type="text" class="input" name="title" placeholder="Your title..." value="{{ $post->title }}" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Image URL</label>
          <div class="control">
            <input type="text" class="input" name="img" placeholder="Your image URL..." value="{{ $post->img }}" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Content</label>
          <div class="control">
            <textarea name="content" class="textarea" placeholder="Your text..." rows="8" cols="80" required>{{ $post->content }}</textarea>
          </div>
        </div>
        <div class="field">
          <input class="button" type="submit" name="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
@else
  <div class="section is-large has-text-centered">
    <h1 class="title">You don't have permission to view this page!</h1>
  </div>
@endif
@endsection
