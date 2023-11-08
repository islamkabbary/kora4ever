<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()
    {
        try {
            return view('Dashboard.tag');
        } catch (\Throwable $th) {
        }
    }
}
