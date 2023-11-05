<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\Leauge;
// use App\Models\//TeamHasLeauge;
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
        $champions = Leauge::whereIn('name', ['LaLiga', 'Copa del Rey', 'UEFA Champions League'])->pluck('id');
        $europa    = Leauge::whereIn('name', ['LaLiga', 'Copa del Rey', 'UEFA Europa League'])->pluck('id');
        $normals   = Leauge::whereIn('name', ['LaLiga', 'Copa del Rey'])->pluck('id');
        //
        $team = new Team();
        $team->name = 'Athletic de Bilbao';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/AthleticBilbao.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Rayo Vallecano';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/RayoVallecano.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Almería';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Almería.png')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Elche';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Elche CF.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Girona';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/GIRONA.gif')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Getafe CF';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Getafe.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Osasuna';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Osasuna.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Real Madrid';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/RealMadrid.jpg')]);
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Real Sociedad';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/RealSociedad.jpg')]);
        foreach ($europa as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Sevilla FC';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Sevilla.jpg')]);
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Cadiz';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Cadiz.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Valencia CF';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Valencia.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Villareal CF';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Villareal.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Atlético de Madrid';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/AtleticoMadrid.jpg')]);
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'FC Barcelona';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Barcelona.jpg')]);
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Real Betis';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/RealBetis.jpg')]);
        foreach ($europa as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Celta de Vigo';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/CeltaVigo.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Real Mallorca';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Mallorca.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Espanyol';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Espanyol.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Getafe CF';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/LaLiga/Getafe.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        // =============================================================================================================
        // Egyption Leauge
        $champions_africa = Leauge::whereIn('name', ['Egyptian Premier League', 'Egypt Cup', 'CAF Champions League'])->pluck('id');
        $africa           = Leauge::whereIn('name', ['Egyptian Premier League', 'Egypt Cup', 'CAF Confederation Cup'])->pluck('id');
        $normals          = Leauge::whereIn('name', ['Egyptian Premier League', 'Egypt Cup'])->pluck('id');
        //
        $team = new Team();
        $team->name = 'Future FC';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/FutureFC.jpg')]);
        foreach ($africa as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Misr Almaqasa';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/MisrMakasa.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Alittihad AlSakandary';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/Alittihad.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Ceramica Cleopatra FC';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/cliopatraFC.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Enppi';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/Enppi.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'El Zamalek';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/Zamalek.jpg')]);
        foreach ($champions_africa as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Ghazl El Mahalla';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/GhazlElmahala.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = "Talaea Elgaish";
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/TalaeaElgaish.jpg')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Smouha';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/Smouha.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Pharco';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/Pharco.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Al Gounah';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/AlGounah.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Al Ahly';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/AlAhly.jpg')]);
        foreach ($champions_africa as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'National Bank';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/NationalBank.jpg')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Almokawloon';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/ElMokawloonElArab.jpg')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Al Ismaily';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/Ismaili.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'El Masry Club';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/elmasry.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Eastern Company';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/EasternCompany.jpg')]);
        foreach ($normals as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Pyramids FC';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Egypt/PyramidsFC.jpg')]);
        foreach ($africa as  $normal) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        // =============================================================================================================
        // France Leauge[Liga 1]
        $champions  = Leauge::whereIn('name', ['Ligue 1', 'Coupe de France', 'UEFA Champions League'])->pluck('id');
        $europa     = Leauge::whereIn('name', ['Ligue 1', 'Coupe de France', 'UEFA Europa League'])->pluck('id');
        $europa_confrance     = Leauge::whereIn('name', ['Ligue 1', 'Coupe de France', 'UEFA Europa Conference League'])->pluck('id');
        $normals    = Leauge::whereIn('name', ['Ligue 1', 'Coupe de France'])->pluck('id');
        //
        $team = new Team();
        $team->name = 'Montpellier';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Montpellier.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'PSG';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/PSG.gif')]);
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Lille';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Lille.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Lyon';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Lyon.png')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Stade Rennais';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Stade Rennais.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Toulouse';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Toulouse.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Marseille';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Marseille.gif')]);
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Nice';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Nice.gif')]);
        foreach ($europa_confrance as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Brest';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Brest.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'AC Ajaccio';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Ajaccio.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Lorient';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Lorient.png')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Stade de Reims';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Stade Reims.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Troyes';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Troyes.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Angers';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Angers.jpg')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Nantes';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Nantes.gif')]);
        foreach ($europa as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }

        $team = new Team();
        $team->name = 'Monaco';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Monaco.gif')]);
        foreach ($champions as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'RC Lens';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Lens.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Auxerre';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Auxerre.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Clermont Foot';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Clermont.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }
        $team = new Team();
        $team->name = 'Strasbourg';
        $team->save();
        //$team->logos()->create(['type' => 'team_logo', 'path' => asset('images/team-logo/Liga1/Strasbourg.gif')]);
        foreach ($normals as  $leauge) {
            //TeamHasLeauge::create(['team_id' => $team->id, 'leauge_id' => $leauge, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0, 'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => 1]);
        }













































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































        $champions  = Leauge::whereIn('name', ['PREMIER LEAGUE', 'FA Cup', 'UEFA Champions League', 'EFL Cup'])->pluck('id');
        $europa  = Leauge::whereIn('name', ['PREMIER LEAGUE', 'FA Cup', 'UEFA Europa League', 'EFL Cup'])->pluck('id');
        $europa_confrance  = Leauge::whereIn('name', ['PREMIER LEAGUE', 'FA Cup', 'UEFA Europa Conference League', 'EFL Cup'])->pluck('id');
        $normals  = Leauge::whereIn('name', ['PREMIER LEAGUE', 'FA Cup', 'EFL Cup'])->pluck('id');

        //Start England
        // $team = Team::create(['name' => 'Manchester United']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/ManchesterUnited.jpg')]);
        // foreach ($europa as $europ) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $europ, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Manchester City']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/ManchesterCity.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Chelsea']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Chelsea.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Liverpool']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Liverpool.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Arsenal']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Arsenal.jpg')]);
        // foreach ($europa as $europ) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $europ, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Tottenham Hotspur']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Tottenham.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'West Ham United']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Westham.jpg')]);
        // foreach ($europa_confrance as $europa_confranc) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Leicester City']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/LiesterCity.jpg')]);
        // foreach ($europa_confrance as $europa_confranc) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Wolverhampton']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Wolverhampton.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Brighton']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Brighton.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Crystal Palace']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/CrystalPalace.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Brentford']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Brentford.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Aston Villa']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/AstonVilla.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Southampton']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Southampton.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Everton']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Everton.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Leeds United']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/LeedsUnited.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // // $team = Team::create(['name' => 'Watford']);
        // // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Watford.jpg')]);
        // // foreach ($normals as $normal) {
        // //     //TeamHasLeauge::create([
        // //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        // //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        // //     ]);
        // // }
        // // $team = Team::create(['name' => 'Burnley']);
        // // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/Burnley.jpg')]);
        // // foreach ($normals as $normal) {
        // //     //TeamHasLeauge::create([
        // //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        // //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        // //     ]);
        // // }
        // $team = Team::create(['name' => 'Newcastle United']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/NewcastleUnited.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // // $team = Team::create(['name' => 'Norwich City']);
        // // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/NorwichCity.jpg')]);
        // // foreach ($normals as $normal) {
        // //     //TeamHasLeauge::create([
        // //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        // //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        // //     ]);
        // // }
        // $team = Team::create(['name' => 'Nottingham Forest']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/NottinghamForestFC.gif')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Bournemouth']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/bournemouth.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Fulham']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Premier-League/fulham.gif')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // //End England

        // // Germany
        // $champions  = Leauge::whereIn('name', ['BUNDESLIGA', 'DFB Pokal', 'UEFA Champions League'])->pluck('id');
        // $europa  = Leauge::whereIn('name', ['BUNDESLIGA', 'DFB Pokal', 'UEFA Europa League'])->pluck('id');
        // $europa_confrance_g  = Leauge::whereIn('name', ['BUNDESLIGA', 'DFB Pokal', 'UEFA Europa Conference League'])->pluck('id');
        // $normals  = Leauge::whereIn('name', ['BUNDESLIGA', 'DFB Pokal'])->pluck('id');

        // $team = Team::create(['name' => 'Bayern Munchen']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/BayernMunchen.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Borussia Dortmund']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/BorussiaDortmund.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // // $team = Team::create(['name' => 'Arminia Bielefeld']);
        // // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/ArminiaBielefeld.jpg')]);
        // // foreach ($normals as $normal) {
        // //     //TeamHasLeauge::create([
        // //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        // //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        // //     ]);
        // // }
        // $team = Team::create(['name' => 'Augsburg']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/Augsburg.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Bayer Leverkusen']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/BayerLeverkusen.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Leipzig']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/Leipzig.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Freiburg']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/Freiburg.jpg')]);
        // foreach ($europa as $europ) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Bochum']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/Bochum.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Frankfurt']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/Frankfurt.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // // $team = Team::create(['name' => 'Greuther Furth']);
        // // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/GreutherFurth.jpg')]);
        // // foreach ($normals as $normal) {
        // //     //TeamHasLeauge::create([
        // //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        // //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        // //     ]);
        // // }
        // $team = Team::create(['name' => 'Hertha Berlin']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/HerthaBerlin.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Hoffenheim']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/Hoffenheim.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Koln']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/Koln.jpg')]);
        // foreach ($europa_confrance_g as $europa_confranc) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Mainz']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/Mainz.jpg')]);
        // foreach ($europa_confrance_g as $europa_confranc) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Monchengladbach']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/Monchengladbach.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Schalke']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/schalke.png')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Stuttgart']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/Stuttgart.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Union Berlin']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/UnionBerlin.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'werder bremen']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/werderbremen.png')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Wolfsburg']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Bundesliga/Wolfsburg.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // //End Germany

        // //
        // $champions  = Leauge::whereIn('name', ['SERIE A', 'Italian Cup', 'UEFA Champions League'])->pluck('id');
        // $europa  = Leauge::whereIn('name', ['SERIE A', 'Italian Cup', 'UEFA Europa League'])->pluck('id');
        // $europa_confrance  = Leauge::whereIn('name', ['SERIE A', 'Italian Cup', 'UEFA Europa Conference League'])->pluck('id');
        // $normals  = Leauge::whereIn('name', ['SERIE A', 'Italian Cup'])->pluck('id');

        // $team = Team::create(['name' => 'Inter Milan']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/InterMilan.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Juventus']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Juventus.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'AC Milan']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/ACMilan.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'ASRoma']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/ASRoma.jpg')]);
        // foreach ($europa as $europ) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $europ, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Atalanta']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Atalanta.jpg')]);
        // foreach ($europa_confrance as $europa_confranc) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Bologna']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Bologna.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Empoli']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Empoli.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Fiorentina']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Fiorentina.jpg')]);
        // foreach ($europa_confrance as $europa_confranc) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $europa_confranc, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Hellas Verona']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/HellasVerona.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Lazio']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Lazio.jpg')]);
        // foreach ($europa as $europ) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $europ, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'lecce']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/lecce.gif')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'monza']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/monza.png')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Napoli']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Napoli.jpg')]);
        // foreach ($champions as $champion) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $champion, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Salernitana']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Salernitana.png')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Sampdoria']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Sampdoria.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Sassuolo']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Sassuolo.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Spezia Calcio']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/SpeziaCalcio.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Torino']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Torino.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
        // $team = Team::create(['name' => 'Udinese']);
        // //$team->logos()->create(['type' => 'Logo', 'path' => asset('images/team-logo/Serie-A/Udinese.jpg')]);
        // foreach ($normals as $normal) {
        //     //TeamHasLeauge::create([
        //         'team_id' => $team->id, 'leauge_id' => $normal, 'played' => 0, 'won' => 0, 'drawn' => 0, 'lost' => 0, 'gf' => 0,
        //         'ga' => 0, 'gd' => 0, 'points' => 0, 'next' => $team->id,
        //     ]);
        // }
    }
}
