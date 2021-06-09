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
                'discover' => 'GET IN (THE LAB) AND DISCOVER THE WORLD',
                'service' => 'GET IN (THE LAB) AND SEE THE SERVICES',
                'team' => 'GET IN (THE LAB) AND MEET THE TEAM',
                'created_at' => now(),
            ],
        ]);
    }
}
