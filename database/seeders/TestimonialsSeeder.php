<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'nom' => 'Smith Michael',
                'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'photo_id' => 5,
                'created_at' => now(),
            ],
            [
                'nom' => 'Rihanna Fenty',
                'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'photo_id' => 6,
                'created_at' => now(),
            ],
            [
                'nom' => 'Beyonce Knowles',
                'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'photo_id' => 7,
                'created_at' => now(),
            ],
        ]);
    }
}
