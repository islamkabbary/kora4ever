<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.home');
    }
    // public function test()
    // {
    //     $apiToken = 'QynUaKIAH9MkCUpAGYB0wVu1GzrigxFUIIbSG7jOZcAxzmvhnaufcJLIqq9t';
    //     $response = Http::withHeaders([
    //         'Content-Type' => 'application/json',
    //         'Accept' => 'application/json',
    //     ])->get('https://api.sportmonks.com/v3/football/leagues/countries/11', ['api_token' => $apiToken]);
    //     // ])->get('https://api.sportmonks.com/v3/core/countries/11', ['api_token' => $apiToken]);

    //     return $response->body();
    // }
}
