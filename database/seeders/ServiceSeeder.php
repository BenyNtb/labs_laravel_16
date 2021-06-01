<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'titre' => 'GET IN THE LAB AND SEE THE SERVICES',
                'sous-titre' => 'GET IN THE LAB',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'icone_id' => 1,
                'created_at' => now(),
            ],
            [
                'titre' => '',
                'sous-titre' => 'PROJECTS ONLINE',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'icone_id' => 2,
                'created_at' => now(),
            ],
            [
                'titre' => '',
                'sous-titre' => 'SMART MARKETING',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'icone_id' => 3,
                'created_at' => now(),
            ],
            [
                'titre' => '',
                'sous-titre' => 'SOCIAL MEDIA',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'icone_id' => 4,
                'created_at' => now(),
            ],
            [
                'titre' => '',
                'sous-titre' => 'BRAINSTORMING',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'icone_id' => 5,
                'created_at' => now(),
            ],
            [
                'titre' => '',
                'sous-titre' => 'DOCUMENTED',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'icone_id' => 6,
                'created_at' => now(),
            ],
            [
                'titre' => '',
                'sous-titre' => 'RESPONSIVE',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'icone_id' => 7,
                'created_at' => now(),
            ],
            [
                'titre' => '',
                'sous-titre' => 'RETINA READY',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'icone_id' => 8,
                'created_at' => now(),
            ],
            [
                'titre' => '',
                'sous-titre' => 'ULTRA MODERN',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'icone_id' => 1,
                'created_at' => now(),
            ],
        ]);
    }
}
