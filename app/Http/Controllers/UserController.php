<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

class UserController extends Controller
{
    public function userList()
    {
      $users = User::all();

      return view('users.userlist', ['users' => $users]);
    }

    public function user()
    {
      $request = request()->route('id');
      $user = User::all()->find($request);

      return view('users.user', ['user' => $user]);
    }
}
