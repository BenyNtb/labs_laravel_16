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
                'type' => "Homme",
                'created_at' => now(),
            ],
            [
                'type' => "Femme",
                'created_at' => now(),
            ],
            [
                'type' => "Autre",
                'created_at' => now(),
            ],
        ]);
    }
}
