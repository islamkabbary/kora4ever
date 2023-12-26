<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\Championship;
// use App\Models\//TeamHasLeauge;
use App\Models\Championship;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // La Liga
        $champions = Championship::whereIn('name', ['LaLiga', 'Copa del Rey', 'UEFA Champions League'])->pluck('id');
        $europa    = Championship::whereIn('name', ['LaLiga', 'Copa del Rey', 'UEFA Europa League'])->pluck('id');
        $normals   = Championship::whereIn('name', ['LaLiga', 'Copa del Rey'])->pluck('id');
        //
        $team = new Team();
        $team->name = 'Athletic de Bilbao';
        $team->logo = 'images/team-logo/LaLiga/AthleticBilbao.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Rayo Vallecano';
        $team->logo = 'images/team-logo/LaLiga/RayoVallecano.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Almería';
        $team->logo = 'images/team-logo/LaLiga/Almería.png';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Elche';
        $team->logo = 'images/team-logo/LaLiga/Elche CF.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Girona';
        $team->logo = 'images/team-logo/LaLiga/GIRONA.gif';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Getafe CF';
        $team->logo = 'images/team-logo/LaLiga/Getafe.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Osasuna';
        $team->logo = 'images/team-logo/LaLiga/Osasuna.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Real Madrid';
        $team->logo = "images/team-logo/LaLiga/RealMadrid.jpg";
        $team->save();
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Real Sociedad';
        $team->logo = 'images/team-logo/LaLiga/RealSociedad.jpg';
        $team->save();
        foreach ($europa as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Sevilla FC';
        $team->logo = 'images/team-logo/LaLiga/Sevilla.jpg';
        $team->save();
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Cadiz';
        $team->logo = 'images/team-logo/LaLiga/Cadiz.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Valencia CF';
        $team->logo = 'images/team-logo/LaLiga/Valencia.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Villareal CF';
        $team->logo = 'images/team-logo/LaLiga/Villareal.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Atlético de Madrid';
        $team->logo = 'images/team-logo/LaLiga/AtleticoMadrid.jpg';
        $team->save();
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'FC Barcelona';
        $team->logo = 'images/team-logo/LaLiga/Barcelona.jpg';
        $team->save();
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Real Betis';
        $team->logo = 'images/team-logo/LaLiga/RealBetis.jpg';
        $team->save();
        foreach ($europa as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Celta de Vigo';
        $team->logo = 'images/team-logo/LaLiga/CeltaVigo.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Real Mallorca';
        $team->logo = 'images/team-logo/LaLiga/Mallorca.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Espanyol';
        $team->logo = 'images/team-logo/LaLiga/Espanyol.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Getafe CF';
        $team->logo = 'images/team-logo/LaLiga/Getafe.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        // =============================================================================================================
        // Egyption Leauge
        $champions_africa =  Championship::whereIn('name', ['Egyptian Premier League', 'Egypt Cup', 'CAF Champions League'])->pluck('id');
        $africa        =    Championship::whereIn('name', ['Egyptian Premier League', 'Egypt Cup', 'CAF Confederation Cup'])->pluck('id');
        $normals       =    Championship::whereIn('name', ['Egyptian Premier League', 'Egypt Cup'])->pluck('id');
        //
        $team = new Team();
        $team->name = 'Future FC';
        $team->logo = 'images/team-logo/Egypt/FutureFC.jpg';
        $team->save();
        foreach ($africa as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Misr Almaqasa';
        $team->logo = 'images/team-logo/Egypt/MisrMakasa.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Alittihad AlSakandary';
        $team->logo = 'images/team-logo/Egypt/Alittihad.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Ceramica Cleopatra FC';
        $team->logo = 'images/team-logo/Egypt/cliopatraFC.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Enppi';
        $team->logo = 'images/team-logo/Egypt/Enppi.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'El Zamalek';
        $team->logo = 'images/team-logo/Egypt/Zamalek.jpg';
        $team->save();
        foreach ($champions_africa as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Ghazl El Mahalla';
        $team->logo = 'images/team-logo/Egypt/GhazlElmahala.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = "Talaea Elgaish";
        $team->name = "images/team-logo/Egypt/TalaeaElgaish.jpg";
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Smouha';
        $team->logo = 'images/team-logo/Egypt/Smouha.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Pharco';
        $team->logo = 'images/team-logo/Egypt/Pharco.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Al Gounah';
        $team->logo = 'images/team-logo/Egypt/AlGounah.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Al Ahly';
        $team->logo = 'images/team-logo/Egypt/AlAhly.jpg';
        $team->save();
        foreach ($champions_africa as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'National Bank';
        $team->logo = 'images/team-logo/Egypt/NationalBank.jpg';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Almokawloon';
        $team->logo = 'images/team-logo/Egypt/ElMokawloonElArab.jpg';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Al Ismaily';
        $team->logo = 'images/team-logo/Egypt/Ismaili.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'El Masry Club';
        $team->logo = 'images/team-logo/Egypt/elmasry.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Eastern Company';
        $team->logo = 'images/team-logo/Egypt/EasternCompany.jpg';
        $team->save();
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Pyramids FC';
        $team->logo = 'images/team-logo/Egypt/PyramidsFC.jpg';
        $team->save();
        foreach ($africa as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        // =============================================================================================================
        // France Leauge[Liga 1]
        $champions =  Championship::whereIn('name', ['Ligue 1', 'Coupe de France', 'UEFA Champions League'])->pluck('id');
        $europa   =   Championship::whereIn('name', ['Ligue 1', 'Coupe de France', 'UEFA Europa League'])->pluck('id');
        $europa_confrance  =    Championship::whereIn('name', ['Ligue 1', 'Coupe de France', 'UEFA Europa Conference League'])->pluck('id');
        $normals  =   Championship::whereIn('name', ['Ligue 1', 'Coupe de France'])->pluck('id');
        //
        $team = new Team();
        $team->name = 'Montpellier';
        $team->logo = 'images/team-logo/Liga1/Montpellier.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'PSG';
        $team->logo = 'images/team-logo/Liga1/PSG.gif';
        $team->save();
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Lille';
        $team->logo = 'images/team-logo/Liga1/Lille.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Lyon';
        $team->logo = 'images/team-logo/Liga1/Lyon.png';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Stade Rennais';
        $team->logo = 'images/team-logo/Liga1/Stade Rennais.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Toulouse';
        $team->logo = 'images/team-logo/Liga1/Toulouse.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Marseille';
        $team->logo = 'images/team-logo/Liga1/Marseille.gif';
        $team->save();
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Nice';
        $team->logo = 'images/team-logo/Liga1/Nice.gif';
        $team->save();
        foreach ($europa_confrance as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Brest';
        $team->logo = 'images/team-logo/Liga1/Brest.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'AC Ajaccio';
        $team->logo = 'images/team-logo/Liga1/Ajaccio.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Lorient';
        $team->logo = 'images/team-logo/Liga1/Lorient.png';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Stade de Reims';
        $team->logo = 'images/team-logo/Liga1/Stade Reims.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Troyes';
        $team->logo = 'images/team-logo/Liga1/Troyes.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Angers';
        $team->logo = 'images/team-logo/Liga1/Angers.jpg';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Nantes';
        $team->name = 'images/team-logo/Liga1/Nantes.gif';
        $team->save();
        foreach ($europa as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Monaco';
        $team->logo = 'images/team-logo/Liga1/Monaco.gif';
        $team->save();
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'RC Lens';
        $team->logo = 'images/team-logo/Liga1/Lens.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Auxerre';
        $team->logo = 'images/team-logo/Liga1/Auxerre.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Clermont Foot';
        $team->logo = 'images/team-logo/Liga1/Clermont.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Strasbourg';
        $team->name = 'images/team-logo/Liga1/Strasbourg.gif';
        $team->save();
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'championship_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }













































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































        $champions =  Championship::whereIn('name', ['PREMIER LEAGUE', 'FA Cup', 'UEFA Champions League', 'EFL Cup'])->pluck('id');
        $europa  = Championship::whereIn('name', ['PREMIER LEAGUE', 'FA Cup', 'UEFA Europa League', 'EFL Cup'])->pluck('id');
        $europa_confrance  = Championship::whereIn('name', ['PREMIER LEAGUE', 'FA Cup', 'UEFA Europa Conference League', 'EFL Cup'])->pluck('id');
        $normals =   Championship::whereIn('name', ['PREMIER LEAGUE', 'FA Cup', 'EFL Cup'])->pluck('id');

        // Start England
        $team = Team::create(['name' => 'Manchester United', 'logo' => 'images/team-logo/Premier-League/ManchesterUnited.jpg']);
        foreach ($europa as $europ) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $europ, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Manchester City', 'logo' => 'images/team-logo/Premier-League/ManchesterCity.jpg']);
        foreach ($champions as $champion) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Chelsea', 'logo' => "images/team-logo/Premier-League/Chelsea.jpg"]);
        foreach ($champions as $champion) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Liverpool', 'logo' => 'images/team-logo/Premier-League/Liverpool.jpg']);
        foreach ($champions as $champion) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Arsenal', 'logo' => 'images/team-logo/Premier-League/Arsenal.jpg']);
        foreach ($europa as $europ) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $europ, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Tottenham Hotspur', 'logo' => 'images/team-logo/Premier-League/Tottenham.jpg']);
        foreach ($champions as $champion) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'West Ham United', 'logo' => 'images/team-logo/Premier-League/Westham.jpg']);
        foreach ($europa_confrance as $europa_confranc) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Leicester City', 'logo' => 'images/team-logo/Premier-League/LiesterCity.jpg']);
        foreach ($europa_confrance as $europa_confranc) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Wolverhampton', 'logo' => 'images/team-logo/Premier-League/Wolverhampton.jpg']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Brighton', 'logo' => 'images/team-logo/Premier-League/Brighton.jpg']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Crystal Palace', 'logo' => 'images/team-logo/Premier-League/CrystalPalace.jpg']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Brentford', 'logo' => 'images/team-logo/Premier-League/Brentford.jpg']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Aston Villa', 'logo' => 'images/team-logo/Premier-League/AstonVilla.jpg']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Southampton', 'logo' => 'images/team-logo/Premier-League/Southampton.jpg']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Everton', 'logo' => 'images/team-logo/Premier-League/Everton.jpg']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Leeds United', 'logo' => 'images/team-logo/Premier-League/LeedsUnited.jpg']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        // $team = Team::create(['name' => 'Watford']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Watford.jpg')]);
        // foreach ($normals as $normal) {
        //     TeamHasLeauge::create([
        //         'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        $team = Team::create(['name' => 'Burnley', 'logo' => 'images/team-logo/Premier-League/Burnley.jpg']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Newcastle United', 'logo' => 'images/team-logo/Premier-League/NewcastleUnited.jpg']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        // $team = Team::create(['name' => 'Norwich City']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/NorwichCity.jpg')]);
        // foreach ($normals as $normal) {
        //     TeamHasLeauge::create([
        //         'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        $team = Team::create(['name' => 'Nottingham Forest', 'logo' => 'images/team-logo/Premier-League/NottinghamForestFC.gif']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Bournemouth', 'logo' => 'images/team-logo/Premier-League/bournemouth.jpg']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Fulham', 'logo' => 'images/team-logo/Premier-League/fulham.gif']);
        foreach ($normals as $normal) {
            // TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        //End England

        // Germany
        $champions =  Championship::whereIn('name', ['BUNDESLIGA', 'DFB Pokal', 'UEFA Champions League'])->pluck('id');
        $europa =  Championship::whereIn('name', ['BUNDESLIGA', 'DFB Pokal', 'UEFA Europa League'])->pluck('id');
        $europa_confrance_g  = Championship::whereIn('name', ['BUNDESLIGA', 'DFB Pokal', 'UEFA Europa Conference League'])->pluck('id');
        $normals =  Championship::whereIn('name', ['BUNDESLIGA', 'DFB Pokal'])->pluck('id');

        $team = Team::create(['name' => 'Bayern Munchen', 'logo' => 'images/team-logo/Bundesliga/BayernMunchen.jpg']);
        foreach ($champions as $champion) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Borussia Dortmund', 'logo' => 'images/team-logo/Bundesliga/BorussiaDortmund.jpg']);
        foreach ($champions as $champion) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        // $team = Team::create(['name' => 'Arminia Bielefeld']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/ArminiaBielefeld.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        $team = Team::create(['name' => 'Augsburg', 'logo' => 'images/team-logo/Bundesliga/Augsburg.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Bayer Leverkusen', 'logo' => 'images/team-logo/Bundesliga/BayerLeverkusen.jpg']);
        foreach ($champions as $champion) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Leipzig', 'logo' => 'images/team-logo/Bundesliga/Leipzig.jpg']);
        foreach ($champions as $champion) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Freiburg', 'logo' => 'images/team-logo/Bundesliga/Freiburg.jpg']);
        foreach ($europa as $europ) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Bochum', 'logo' => 'images/team-logo/Bundesliga/Bochum.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Frankfurt', 'logo' => 'images/team-logo/Bundesliga/Frankfurt.jpg']);
        foreach ($champions as $champion) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        // $team = Team::create(['name' => 'Greuther Furth']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/GreutherFurth.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        $team = Team::create(['name' => 'Hertha Berlin', 'logo' => 'images/team-logo/Bundesliga/HerthaBerlin.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Hoffenheim', 'logo' => 'images/team-logo/Bundesliga/Hoffenheim.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Koln', 'logo' => 'images/team-logo/Bundesliga/Koln.jpg']);
        foreach ($europa_confrance_g as $europa_confranc) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Mainz', 'logo' => 'images/team-logo/Bundesliga/Mainz.jpg']);
        foreach ($europa_confrance_g as $europa_confranc) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Monchengladbach', 'logo' => 'images/team-logo/Bundesliga/Monchengladbach.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Schalke', 'logo' => 'images/team-logo/Bundesliga/schalke.png']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Stuttgart', 'logo' => 'images/team-logo/Bundesliga/Stuttgart.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Union Berlin', 'logo' => 'images/team-logo/Bundesliga/UnionBerlin.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'werder bremen', 'logo' => 'images/team-logo/Bundesliga/werderbremen.png']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Wolfsburg', 'logo' => 'images/team-logo/Bundesliga/Wolfsburg.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        //End Germany

        //
        $champions =  Championship::whereIn('name', ['SERIE A', 'Italian Cup', 'UEFA Champions League'])->pluck('id');
        $europa =  Championship::whereIn('name', ['SERIE A', 'Italian Cup', 'UEFA Europa League'])->pluck('id');
        $europa_confrance  = Championship::whereIn('name', ['SERIE A', 'Italian Cup', 'UEFA Europa Conference League'])->pluck('id');
        $normals =  Championship::whereIn('name', ['SERIE A', 'Italian Cup'])->pluck('id');

        $team = Team::create(['name' => 'Inter Milan', 'logo' => 'images/team-logo/Serie-A/InterMilan.jpg']);
        foreach ($champions as $champion) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Juventus', 'logo' => 'images/team-logo/Serie-A/Juventus.jpg']);
        foreach ($champions as $champion) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'AC Milan', 'logo' => 'images/team-logo/Serie-A/ACMilan.jpg']);
        foreach ($champions as $champion) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'ASRoma', 'logo' => 'images/team-logo/Serie-A/ASRoma.jpg']);
        foreach ($europa as $europ) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $europ, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Atalanta', 'logo' => 'images/team-logo/Serie-A/Atalanta.jpg']);
        foreach ($europa_confrance as $europa_confranc) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Bologna', 'logo' => 'images/team-logo/Serie-A/Bologna.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Empoli', 'logo' => 'images/team-logo/Serie-A/Empoli.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Fiorentina', 'logo' => 'images/team-logo/Serie-A/Fiorentina.jpg']);
        foreach ($europa_confrance as $europa_confranc) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Hellas Verona', 'logo' => 'images/team-logo/Serie-A/HellasVerona.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Lazio', 'logo' => 'images/team-logo/Serie-A/Lazio.jpg']);
        foreach ($europa as $europ) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $europ, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'lecce', 'logo' => 'images/team-logo/Serie-A/lecce.gif']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'monza', 'logo' => 'images/team-logo/Serie-A/monza.png']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Napoli', 'logo' => 'images/team-logo/Serie-A/Napoli.jpg']);
        foreach ($champions as $champion) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Salernitana', 'logo' => 'images/team-logo/Serie-A/Salernitana.png']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Sampdoria', 'logo' => 'images/team-logo/Serie-A/Sampdoria.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Sassuolo', 'logo' => 'images/team-logo/Serie-A/Sassuolo.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Spezia Calcio', 'logo' => 'images/team-logo/Serie-A/SpeziaCalcio.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Torino', 'logo' => 'images/team-logo/Serie-A/Torino.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
        $team = Team::create(['name' => 'Udinese', 'logo' => 'images/team-logo/Serie-A/Udinese.jpg']);
        foreach ($normals as $normal) {
            //TeamHasLeauge::create([
            //     'team_id' => $team->id, 'championship_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
            //     'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
            // ]);
        }
    }
}
