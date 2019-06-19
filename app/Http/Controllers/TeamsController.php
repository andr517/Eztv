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
  public function createPlayerView($id)
  {
    $request = request()->route('id');
    $players = DB::table('players')->find($request);
    return view('teams.createPlayer', ['id' => $id, 'players' => $players]);
  }
  public function editTeamView($id)
  {
    $request = request()->route('id');
    $teams = DB::table('teams')->find($request);
    return view('teams.editTeams', ['id' => $id, 'teams' => $teams]);
  }
  public function editPlayersView($id)
  {
    $request = request()->route('id');
    $players = DB::table('players')->find($request);
    return view('teams.editPlayers', ['id' => $id, 'players' => $players]);
  }
  public function editTeamSave($id)
  {
    $name = request('teamName');
    $rank = request('rank');
    $teamUrl = request('teamUrl');
    $logoUrl = request('logoUrl');
    $country = request('country');
    $flag = request('flag');
    teams::where('id', $id)->update(['name' => $name, 'rank' => $rank, 'teamUrl' => $teamUrl, 'logoUrl' => $logoUrl, 'country' => $country, 'flag' => $flag]);
    return redirect('/teams');
  }
  public function editPlayerSave($id)
  {
    $name = request('name');
    $alias = request('alias');
    $age = request('age');
    $rating = request('rating');
    $flag = request('flag');
    $playerUrl = request('playerUrl');
    players::where('id', $id)->update(['name' => $name, 'alias' => $alias, 'age' => $age, 'rating' => $rating, 'flag' => $flag, 'playerUrl' => $playerUrl]);
     $redir=players::with('teams')->find($id);
    return redirect('teams/team/'. $redir->teams->id . '');
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
  public function createPlayerPost($id)
  {
    $newPlayer = new players();
    $newPlayer->name = request('playerName');
    $newPlayer->alias = request('alias');
    $newPlayer->age = request('age');
    $newPlayer->rating = request('rating');
    $newPlayer->flag = request('flag');
    $newPlayer->playerUrl = request('playerUrl');
    $newPlayer->team_id = request('team_id');

    $newPlayer->save();

    return redirect('teams/team/'.$id.'');
  }
  public function deleteTeam($id)
  {
    DB::delete('DELETE from teams WHERE id = ?',[$id]);

    return redirect('/teams');
  }
  public function deletePlayer($id)
  {
    DB::delete('DELETE from players WHERE id = ?',[$id]);
   return redirect('/teams');
  }
}
