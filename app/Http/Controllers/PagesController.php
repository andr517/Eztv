<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;

class PagesController extends Controller
{
    public function index()
    {

      $news = News::all();
       return view('index', ['news' => $news]);
    }

    public function teams()
    {
        return view('teams');
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
