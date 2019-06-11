<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use App\User;
use Auth;

class PostsController extends Controller
{
  public function index()
  {
    $news = News::all();
    $teams = DB::table('teams')->get();
     return view('index', ['news' => $news, 'teams' => $teams]);
  }

  public function post()
  {
    $request = request()->route('id');
    $post = DB::table('news')->find($request);
    $teams = DB::table('teams')->get();
     return view('posts.post', ['post' => $post, 'teams' => $teams]);
  }

  public function create()
  {
    return view('posts.create');
  }

  public function store()
  {
    $post = new News();
    $post->title = request('title');
    $post->img = request('img');
    $post->content = request('content');
    $post->user_id = Auth::user()->id;

    $post->save();

    return redirect('/');
  }
}
