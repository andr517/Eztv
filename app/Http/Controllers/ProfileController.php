<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\News;
use Auth;

class ProfileController extends Controller
{
      // public function update(array $data)
  // {
  //     return User::update([
  //         'name' => $data['name'],
  //         'info' => $data['info'],
  //         'picture' => $data['picture'],
  //         'email' => $data['email'],
  //         'password' => Hash::make($data['password'])
  //     ]);
  // }
  public function profile()
  {
      $teams = DB::table('teams')->get();
       return view('profile', ['teams' => $teams]);
  }
  
  public function edit()
  {
      $teams = DB::table('teams')->get();
       return view('edit', ['teams' => $teams]);
  }

  public function update()
  {
        // $data = $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required',
        // ]);
        $user = Auth::user();
          $user->name = request('name');
          $user->email = request('email');
          $user->info = request('info');
          $user->picture = request('picture');
          $user->save();
          return redirect('/profile');
     // return User::update([
          

      //]);
      // return redirect('/profile');
  }
}
