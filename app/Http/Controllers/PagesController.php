<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
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
