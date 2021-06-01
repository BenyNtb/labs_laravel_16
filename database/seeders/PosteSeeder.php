<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postes')->insert([
            [
                'titre' => 'CEO',
                'created_at' => now(),
            ],
            [
                'titre' => 'JUNIOR DEVELOPER',
                'created_at' => now(),
            ],
            [
                'titre' => 'DIGITAL DESIGNER',
                'created_at' => now(),
            ],
            [
                'titre' => 'PROJECT MANAGER',
                'created_at' => now(),
            ],
        ]);
    }
}
