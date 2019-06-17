<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Teams;
use App\Matches;

class MatchesController extends Controller
{
  public function matches()
  {
    $matches = Matches::all();
    return view('matches', ['matches' => $matches]);
  }
}
