<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'sexe' => "Homme",
                'created_at' => now(),
            ],
            [
                'sexe' => "Femme",
                'created_at' => now(),
            ],
            [
                'sexe' => "Autre",
                'created_at' => now(),
            ],
        ]);
    }
}
