<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'nom' => "Admin",
                'created_at' => now(),
            ],
            [
                'nom' => "Webmaster",
                'created_at' => now(),
            ],
            [
                'nom' => "Redacteur",
                'created_at' => now(),
            ],
            [
                'nom' => "Membre",
                'created_at' => now(),
            ],
        ]);
    }
}
