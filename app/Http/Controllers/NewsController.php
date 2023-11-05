<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function create()
    {
        try {
            return view('Dashboard.news');
        } catch (\Throwable $th) {
        }
    }
}
