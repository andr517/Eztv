<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use App\User;
use App\Teams;
use App\Players;
use Auth;

class PostsController extends Controller
{
  public function index()
  {
    $news = News::all();
    $teams = Teams::all();
    $player = Players::with('teams')->find(2);

     return view('index', ['news' => $news, 'teams' => $teams, 'player' => $player]);
  }

  public function post()
  {
    $request = request()->route('id');
    $user = News::with('user')->where('id', $request)->get();
    $post = News::all()->find($request);
    $teams = Teams::all();

     return view('posts.post', ['user' => $user, 'post' => $post, 'teams' => $teams]);
  }

  public function create()
  {
    return view('posts.create');
  }

  public function createsave()
  {
    $post = new News();
    $post->title = request('title');
    $post->img = request('img');
    $post->content = request('content');
    $post->user_id = Auth::user()->id;
    $post->save();

    return redirect('/');
  }

  public function edit($id)
  {
    $request = request()->route('id');
    $post = News::all()->find($request);

    return view('posts.edit', ['id' => $id, 'post' => $post]);
  }

  public function editsave($id)
  {
    $title = request('title');
    $img = request('img');
    $content = request('content');

    News::where('id', $id)->update(['title' => $title, 'img' => $img, 'content' => $content]);

    return redirect('/');
  }

  public function delete($id)
  {
    DB::delete('DELETE from news WHERE id = ?',[$id]);

    return redirect('/');
  }
}
