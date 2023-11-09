<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create()
    {
        try {
            return view('Dashboard.team');
        } catch (\Throwable $th) {
        }
    }
}
