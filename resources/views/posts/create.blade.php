@extends('layout')

@section('title', 'New Post - EZTV')

@section('content')
<div class="columns">
    <div class="column">
        <form method="POST" action="<?php echo action('PostsController@store'); ?>">
            @csrf
            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input type="text" class="input" name="title" placeholder="Your title..." required>
                </div>
            </div>
            <div class="field">
                <label class="label">Image URL</label>
                <div class="control">
                    <input type="text" class="input" name="img" Placeholder="Your image URL..." required>
                </div>
            </div>
            <div class="field">
                <label class="label">Content</label>
                <div class="control">
                    <textarea name="content" class="textarea" rows="8" cols="80" placeholder="Your text..." required></textarea>
                </div>
            </div>
            <div class="field">
                <input class="button" type="submit" name="submit"
                  value="Submit">
            </div>
        </form>
    </div>
</div>
@endsection
