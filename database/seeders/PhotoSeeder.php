<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            [
                'nom' => 'Admin',
                'src' => 'admin.png',
                'created_at' => now(),
            ],
            [
                'nom' => 'Webmaster',
                'src' => 'webmaster.png',

                'created_at' => now(),
            ],
            [
                'nom' => 'Redacteur',
                'src' => 'redacteur.png',
                'created_at' => now(),
            ],
            [
                'nom' => 'Membre',
                'src' => 'membre.png',
                'created_at' => now(),
            ]
        ]);
    }
}
