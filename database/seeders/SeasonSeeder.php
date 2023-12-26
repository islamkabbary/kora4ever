<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Season = new Season;
        $Season->name = "2023/2024";
        $Season->save();
        $Season = new Season;
        $Season->name = "2022/2023";
        $Season->save();
        $Season = new Season;
        $Season->name = "2021/2022";
        $Season->save();
        $Season = new Season;
        $Season->name = "2020/2021";
        $Season->save();
    }
}
