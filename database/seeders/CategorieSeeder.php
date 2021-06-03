<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'nom' => 'Vestibulum maximus',
                'created_at' => now(),
            ],
            [
                'nom' => 'Nisi eu lobortis pharetra',
                'created_at' => now(),
            ],
            [
                'nom' => 'Orci quam accumsan',
                'created_at' => now(),
            ],
            [
                'nom' => 'Auguen pharetra massa',
                'created_at' => now(),
            ],
            [
                'nom' => 'Tellus ut nulla',
                'created_at' => now(),
            ],
            [
                'nom' => 'Etiam egestas viverra',
                'created_at' => now(),
            ],
        ]);


    }
}
