<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icones')->insert([
            [
                'class' => 'flaticon-023-flask',
                'created_at' => now(),
            ],
            [
                'class' => 'flaticon-011-compass',
                'created_at' => now(),
            ],
            [
                'class' => 'flaticon-037-idea',
                'created_at' => now(),
            ],
            [
                'class' => 'flaticon-039-vector',
                'created_at' => now(),
            ],
            [
                'class' => 'flaticon-036-brainstorming',
                'created_at' => now(), 
            ],
            [
                'class' => 'flaticon-026-search',
                'created_at' => now(),
            ],
            [
                'class' => 'flaticon-018-laptop-1',
                'created_at' => now(),
            ],
            [
                'class' => 'flaticon-043-sketch',
                'created_at' => now(),
            ],
            [
                'class' => 'flaticon-012-cube',
                'created_at' => now(),
            ],
        ]);
    }
}
