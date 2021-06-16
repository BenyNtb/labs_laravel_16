<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            [
                'img' => '01.jpg',
                'titreIntro' => 'Get your freebie template now!',
                "principal" => 1,
                'created_at' => now(),
            ],
            [
                'img' => '02.jpg',
                'titreIntro' => 'Get your freebie template now!',
                "principal" => 0,
                'created_at' => now(),

            ],
            
        ]);
    }
}
