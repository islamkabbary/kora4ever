<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Team;
use App\Models\Leauge;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();
        $names = Team::all()->pluck('name')->toArray();

        foreach ($names as $name) {
            Tag::create([
                'name'=>$name,
            ]);
        }

        $leauges = Leauge::all()->pluck('name')->toArray();

        foreach ($leauges as $name) {
            Tag::create([
                'name'=>$name,
            ]);
        }
    }
}
