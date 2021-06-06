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
                'poste_id'=> 2,
                'created_at' => now(),
            ],
            [
                'nom' => 'Rihanna Fenty',
                'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'photo_id' => 6,
                'poste_id'=> 1,
                'created_at' => now(),
            ],
            [
                'nom' => 'Beyonce Knowles',
                'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'photo_id' => 7,
                'poste_id'=> 3,
                'created_at' => now(),
            ],
            [
                'nom' => 'Bryson Tiller',
                'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'photo_id' => 5,
                'poste_id'=> 4,
                'created_at' => now(),
            ],
        ]);
    }
}
