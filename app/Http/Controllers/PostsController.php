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
    $user = News::with('user')->where('id', $request)->get();
    $post = DB::table('news')->find($request);
    $teams = DB::table('teams')->get();
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
    $post = DB::table('news')->find($request);
    return view('posts.edit', ['id' => $id, 'post' => $post]);
  }

  public function editsave($id)
  {
    $title = request('title');
    $img = request('img');
    $content = request('content');
    // DB::update('UPDATE news SET title = ?, img = ?, content = ? WHERE id = ?', [$title, $img, $content, $id]);

    News::where('id', $id)->update(['title' => $title, 'img' => $img, 'content' => $content]);

    return redirect('/');
  }

  public function delete($id)
  {
    DB::delete('DELETE from news WHERE id = ?',[$id]);

    return redirect('/');
  }
}
