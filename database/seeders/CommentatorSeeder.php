<?php

namespace Database\Seeders;

use App\Models\Commentator;
use Illuminate\Database\Seeder;

class CommentatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commentators = ['Essam Al Shawale','Khalil Al-Bloshi',
        'Khalil Al-Bloshi','Ahmed Abdou','Raaof Khalif','Ahmed Fouad','Yousef Saif',
        'Hafid Derradji','Khalid Alghol','Mohammad Barakat','Madar Al Yousef',
        'Ali Mohammad Ali','Ahmed Altayeb','Adel Khalo','Jaouad Bedda','Khalid Al-Hiddi',
        'Sewar Al Dhahab','hatim baticha','Mohmed Algyaty','Ayman Alkashef','Mohamed Afify',
        'Mohmed Alkawaleny','Mohamed Alchazly','Moamen Hasan','Medhat Shalaby','Amir Mahrous',
        'Bilal Allam', 'Mohamed El bouchi', ];

        foreach ($commentators as $commentator) {
            Commentator::create([
                'name'=>$commentator
            ]);
        }
    }
}