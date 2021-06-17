<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSujetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_sujets')->insert([
            [
                'option' => "More information",
                'created_at' => now(),
            ],
            [
                'option' => 'Job',
                'created_at' => now(),
            ],
            [
                'option' => 'Post request',
                'created_at' => now(),
            ],
        ]);
    }
}
