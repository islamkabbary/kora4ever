<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels = [
            'BeiN Sports 1', 'BeiN Sports 2', 'BeiN Sports 3',
            'BeiN Sports 4', 'BeiN Sports 5', 'BeiN Sports 6',
            'BeiN Sports 7', 'BeiN Sports 8', 'BeiN Sports 9',
            'On TimeSport 1', 'BeiN Sport News', 'BeiN Sports 1 Premium',
            'BeiN Sports 2 Premium', 'BeiN Sports 3 Premium', 'BeiN Sports HD 1 Max',
            'BeiN Sports HD 2 Max'
        ];

        foreach ($channels as $channel) {
            Channel::create([
                'name' => $channel
            ]);
        }
    }
}
