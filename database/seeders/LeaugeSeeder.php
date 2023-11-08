<?php

namespace Database\Seeders;

use App\Models\Leauge;
use App\Models\Country;
use Illuminate\Database\Seeder;

class LeaugeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $leauges = [
            [
                'name' => 'PREMIER LEAGUE', 'country'=>'Europe', 'type'=> 'league','logo' => 'images/Leauges/PREMIER LEAGUE.png',
            ],
            [
                'name' => 'EFL Cup', 'country'=>'Europe', 'type'=> 'cup','logo' => 'images/Leauges/EFL Cup.png',
            ],
            [
                'name' => 'LaLiga', 'country'=>'Europe', 'type'=> 'league','logo' => 'images/Leauges/LaLiga.png',
            ],
            [
                'name' => 'Copa del Rey', 'country'=>'Europe', 'type'=> 'cup','logo' => 'images/Leauges/CopaDelRey.png',
            ],
            [
                'name' => 'Ligue 1', 'country'=>'Europe', 'type'=> 'league','logo' => 'images/Leauges/Liga 1.png',
            ],
            [
                'name' => 'Coupe de France', 'country'=>'Europe', 'type'=> 'cup','logo' => 'images/Leauges/CoupedeFrance.png',
            ],
            [
                'name' => 'SERIE A', 'country'=>'Europe', 'type'=> 'league','logo' => 'images/Leauges/Serie a.png',
            ],
            [
                'name' => 'Italian Cup', 'country'=>'Europe', 'type'=> 'cup','logo' => 'images/Leauges/CoppaItalia.png',
            ],
            [
                'name' => 'Egyptian Premier League', 'country'=>'Egypt', 'type'=> 'league','logo' => 'images/Leauges/Egyptian_Premier_League.png',
            ],
            [
                'name' => 'Egypt Cup', 'country'=>'Egypt', 'type'=> 'cup','logo' => 'images/Leauges/EgyptCup.png',
            ],
            [
                'name' => 'Botola Pro 1', 'country'=>'Morocco', 'type'=> 'league','logo' => 'images/Leauges/Morocco.png',
            ],
            [
                'name' => 'BUNDESLIGA', 'country'=>'Europe', 'type'=> 'league','logo' => 'images/Leauges/BUNDESLIGA.png',
            ],
            [
                'name' => 'DFB Pokal', 'country'=>'Europe', 'type'=> 'cup','logo' => 'images/Leauges/DFBPokal.png',
            ],
            [
                'name' => 'CAF Champions League', 'country'=>'Africa', 'type'=> 'league','logo' => 'images/Leauges/CAFChampionsLeague.png',
            ],
            [
                'name' => 'CAF Confederation Cup', 'country'=>'Africa', 'type'=> 'league','logo' => 'images/Leauges/CAFConfederationCup.png',
            ],
            [
                'name' => 'African Nations Cup', 'country'=>'Africa', 'type'=> 'league','logo' => 'images/Leauges/AfricanNationsCup.png',
            ],
            [
                'name' => 'Spanish Super Cup', 'country'=>'Europe', 'type'=> 'supercup','logo' => 'images/Leauges/Supercopa.jpg',
            ],
            [
                'name' => 'French Super Cup', 'country'=>'Europe', 'type'=> 'supercup','logo' => 'images/Leauges/SupercoupeFrance.png',
            ],
            [
                'name' => 'UEFA World Cup', 'country'=>'Europe', 'type'=> 'league','logo' => 'images/Leauges/WorldCup.png',
            ],
            [
                'name' => 'UEFA World Cup Qualification', 'country'=>'Europe', 'type'=> 'league','logo' => 'images/Leauges/FIFAWorldCupqualification(AFC).png',
            ],
            [
                'name' => 'UEFA Champions League', 'country'=>'Europe', 'type'=> 'league','logo' => 'images/Leauges/UEFAChampionsLeague.png',
            ],
            [
                'name' => 'UEFA Europa League', 'country'=>'Europe', 'type'=> 'league','logo' => 'images/Leauges/EuropaLeague.png',
            ],
            [
                'name' => 'UEFA Europa Conference League', 'country'=>'Europe', 'type'=> 'league','logo' => 'images/Leauges/UEFAEuropaConferenceLeague.png',
            ],
            [
                'name' => 'FA Cup', 'country'=>'Europe', 'type'=> 'cup','logo' => 'images/Leauges/FACup.png',
            ],
        ];
        foreach ($leauges as  $leauge) {
            $id = Country::where('name', 'like', '%' . $leauge['country'] . '%')->first()->id;
            Leauge::create([
                'name' => $leauge['name'],
                'type' => $leauge['type'],
                'logo' => $leauge['logo'],
                'country_id' => $id,
            ]);
        }
    }
}
