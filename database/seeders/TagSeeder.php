<?php

namespace Database\Seeders;

use App\Models\Leauge;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Teams;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = Teams::all()->pluck('name')->toArray();

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
