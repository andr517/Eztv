<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\News;
use Auth;

class PagesController extends Controller
{
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
