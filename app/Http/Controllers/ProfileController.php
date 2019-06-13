<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\News;
use Auth;

class ProfileController extends Controller
{
  public function profile()
  {
      $teams = DB::table('teams')->get();
       return view('profile', ['teams' => $teams]);
  }

  public function edit()
  {
      $teams = DB::table('teams')->get();
       return view('profile\edit', ['teams' => $teams]);
  }

  public function info()
  {
      $teams = DB::table('teams')->get();
       return view('profile\info', ['teams' => $teams]);
  }

  public function teams()
  {
      $teams = DB::table('teams')->get();
       return view('profile\teams', ['teams' => $teams]);
  }

  public function update()
  {
        // $data = $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required',
        // ]);
        $user = Auth::user();
          $user->name = request('name');
          $user->userName = request('userName');
          $user->email = request('email');
          $user->emailAnswer = request('answer');
          $user->info = request('info');
          $user->country = request('country');
          $user->flag = request('flag');
          $user->banner = request('banner');
          $user->picture = request('picture');
          $user->save();
          return redirect('/profile');
  }
}
