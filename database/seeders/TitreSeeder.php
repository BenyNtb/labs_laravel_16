<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            [
                'titreDiscover' => 'GET IN THE LAB AND DISCOVER THE WORLD',
                'created_at' => now(),
            ],
            [
                'titreService' => 'GET IN THE LAB AND SEE THE SERVICES',
                'created_at' => now(),
            ],
            [
                'titreTeam' => 'GET IN THE LAB AND MEET THE TEAM',
                'created_at' => now(),
            ],
        ]);
    }
}
