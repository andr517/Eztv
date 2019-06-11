<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Players;
use App\Teams;
use App\News;
use Auth;

class PagesController extends Controller
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
    public function players()
    {


    }
    public function matches()
    {
        return view('matches');
    }

    public function forums()
    {
        return view('forums');
    }

    public function profile()
    {
        $teams = DB::table('teams')->get();
         return view('profile', ['teams' => $teams]);
    }

}
