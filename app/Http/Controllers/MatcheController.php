<?php

namespace App\Http\Controllers;

class MatcheController extends Controller
{
    public function create()
    {
        try {
            return view("Dashboard.create_match");
        } catch (\Throwable $th) {
        }
    }
}
