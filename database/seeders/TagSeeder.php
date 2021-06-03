<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'nom' => 'branding',
                'created_at' => now(),
            ],
            [
                'nom' => 'identity',
                'created_at' => now(),
            ],
            [
                'nom' => 'video',
                'created_at' => now(),
            ],
            [
                'nom' => 'design',
                'created_at' => now(),
            ],
            [
                'nom' => 'inspiration',
                'created_at' => now(),
            ],
            [
                'nom' => 'web design',
                'created_at' => now(),
            ],
            [
                'nom' => 'photography',
                'created_at' => now(),
            ],
        ]);


    }
}
