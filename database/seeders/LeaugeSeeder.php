<?php

namespace Database\Seeders;

use App\Models\country_id;
use App\Models\Championship;
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
                'name' => 'PREMIER LEAGUE', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/PREMIER LEAGUE.png',
            ],
            [
                'name' => 'EFL Cup', 'country_id' => 226, 'type' => 'cup', 'logo' => 'images/Leauges/EFL Cup.png',
            ],
            [
                'name' => 'LaLiga', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/LaLiga.png',
            ],
            [
                'name' => 'Copa del Rey', 'country_id' => 226, 'type' => 'cup', 'logo' => 'images/Leauges/CopaDelRey.png',
            ],
            [
                'name' => 'Ligue 1', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/Liga 1.png',
            ],
            [
                'name' => 'Coupe de France', 'country_id' => 226, 'type' => 'cup', 'logo' => 'images/Leauges/CoupedeFrance.png',
            ],
            [
                'name' => 'SERIE A', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/Serie a.png',
            ],
            [
                'name' => 'Italian Cup', 'country_id' => 226, 'type' => 'cup', 'logo' => 'images/Leauges/CoppaItalia.png',
            ],
            [
                'name' => 'Egyptian Premier League', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/Egyptian_Premier_League.png',
            ],
            [
                'name' => 'Egypt Cup', 'country_id' => 226, 'type' => 'cup', 'logo' => 'images/Leauges/EgyptCup.png',
            ],
            [
                'name' => 'Botola Pro 1', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/Morocco.png',
            ],
            [
                'name' => 'BUNDESLIGA', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/BUNDESLIGA.png',
            ],
            [
                'name' => 'DFB Pokal', 'country_id' => 226, 'type' => 'cup', 'logo' => 'images/Leauges/DFBPokal.png',
            ],
            [
                'name' => 'CAF Champions League', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/CAFChampionsLeague.png',
            ],
            [
                'name' => 'CAF Confederation Cup', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/CAFConfederationCup.png',
            ],
            [
                'name' => 'African Nations Cup', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/AfricanNationsCup.png',
            ],
            [
                'name' => 'Spanish Super Cup', 'country_id' => 226, 'type' => 'supercup', 'logo' => 'images/Leauges/Supercopa.jpg',
            ],
            [
                'name' => 'French Super Cup', 'country_id' => 226, 'type' => 'supercup', 'logo' => 'images/Leauges/SupercoupeFrance.png',
            ],
            [
                'name' => 'UEFA World Cup', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/WorldCup.png',
            ],
            [
                'name' => 'UEFA World Cup Qualification', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/FIFAWorldCupqualification(AFC).png',
            ],
            [
                'name' => 'UEFA Champions League', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/UEFAChampionsLeague.png',
            ],
            [
                'name' => 'UEFA Europa League', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/EuropaLeague.png',
            ],
            [
                'name' => 'UEFA Europa Conference League', 'country_id' => 226, 'type' => 'league', 'logo' => 'images/Leauges/UEFAEuropaConferenceLeague.png',
            ],
            [
                'name' => 'FA Cup', 'country_id' => 226, 'type' => 'cup', 'logo' => 'images/Leauges/FACup.png',
            ],
            [
                'name' => 'FA Cup', 'country_id' => 187, 'type' => 'league', 'logo' => 'images/Leauges/saudi_pro_league.png',
            ],
        ];
        foreach ($leauges as  $leauge) {
            $l = new Championship;
            $l->name = $leauge['name'];
            $l->type = $leauge['type'];
            $l->logo = $leauge['logo'];
            $l->country_id = $leauge['country_id'];
            $l->save();
        }
    }
}
