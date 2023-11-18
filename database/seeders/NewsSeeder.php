<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $News = new News();
        $News->title = "(دوري انجليزي) الهلال يحسم مستقبل ألكسندر ميتروفيتش من العروض الأوروبية";
        $News->body = "";
        $News->media()->create(['url'=> "images/News/Mitrović.png"]);
        $News->team_id = 59;
        $News->leauge_id = 1;
        $News->created_by = 1;
        $News->save();

        $News = new News();
        $News->title = "(دوري اسباني) الهلال يحسم مستقبل ألكسندر ميتروفيتش من العروض الأوروبية";
        $News->body = "";
        $News->media()->create(['url'=> "images/News/Mitrović.png"]);
        $News->team_id = 15;
        $News->leauge_id = 3;
        $News->created_by = 1;

        $News->save();
        $News = new News();
        $News->title = "(دوري مصري) الهلال يحسم مستقبل ألكسندر ميتروفيتش من العروض الأوروبية";
        $News->body = "";
        $News->media()->create(['url'=> "images/News/Mitrović.png"]);
        $News->team_id = 32;
        $News->leauge_id = 9;
        $News->created_by = 1;
        $News->save();
    }
}
