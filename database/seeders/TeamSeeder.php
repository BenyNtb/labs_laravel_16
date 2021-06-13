<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [

                'nom' => 'Christinne Williams',
                'photo_id' => 1,
                'poste_id' => 3,
                'created_at' => now(),
            ],
            [

                'nom' => 'Blandine Croissant',
                'photo_id' => 2,
                'poste_id' => 2,
                'created_at' => now(),
            ],
            [

                'nom' => 'Jean DuJardin',
                'photo_id' => 3,
                'poste_id' => 4,
                'created_at' => now(),
            ],
            [

                'nom' => 'Suzie DuBois',
                'photo_id' => 2,
                'poste_id' => 3,
                'created_at' => now(),
            ],
            [

                'nom' => 'Paul Pierret',
                'photo_id' => 3,
                'poste_id' => 2,
                'created_at' => now(),
            ],
            [

                'nom' => 'Sandrine Beranger',
                'photo_id' => 4,
                'poste_id' => 2,
                'created_at' => now(),
            ],
            [

                'nom' => 'Simon Boucher',
                'photo_id' => 3,
                'poste_id' => 1,
                'created_at' => now(),
            ],
        ]);
    }
}
