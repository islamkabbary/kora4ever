<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
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
    public function test()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api-football-v1.p.rapidapi.com/v3/fixtures/statistics?fixture=215662', [
            'headers' => [
                'X-RapidAPI-Host' => 'api-football-v1.p.rapidapi.com',
                'X-RapidAPI-Key' => 'e83859b104msh9423cacb53ce1fbp1714aajsn3ee97296effa',
            ],
        ]);

        return $response->getBody()->getContents();
    }
}
