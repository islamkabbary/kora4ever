<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaugeController extends Controller
{
    public function create()
    {
        try {
            return view('Dashboard.leagues');
        } catch (\Throwable $th) {
        }
    }
}
