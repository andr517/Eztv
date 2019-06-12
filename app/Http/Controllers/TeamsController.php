<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Players;
use App\Teams;
use Auth;

class TeamsController extends Controller
{
  public function teams()
  {
      $teams = Teams::all();
      return view('teams', ['teams' => $teams]);
  }
  public function team()
  {
      $teams = Teams::all();
      $request = request()->route('id');
      $teams = DB::table('teams')->find($request);
      $players = Players::with('teams')->where('team_id',$request)->get();
      return view('team', ['teams' => $teams,'players' => $players]);
  }
  public function createTeamView()
  {
    return view('teams.createTeam');
  }
  public function createTeamPost()
  {
    $newTeam = new teams();
    $newTeam->name = request('teamName');
    $newTeam->rank = request('rank');
    $newTeam->teamUrl = request('teamUrl');
    $newTeam->logoUrl = request('logoUrl');
    $newTeam->country = request('country');
    $newTeam->flag = request('flag');

    $newTeam->save();

    return redirect('/teams');
  }
}
