<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function teams()
    {

        $teams = DB::table('teams')->get();

        return view('teams', ['teams' => $teams]);

    }
    public function team()
    {

        $teams = DB::table('teams')->get();

        return view('team', ['teams' => $teams]);

    }

    public function matches()
    {
        return view('matches');
    }

    public function forums()
    {
        return view('forums');
    }

}
