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
                'roles' => "Admin",
                'created_at' => now(),
            ],
            [
                'roles' => "Webmaster",
                'created_at' => now(),
            ],
            [
                'roles' => "Redacteur",
                'created_at' => now(),
            ],
            [
                'roles' => "Membre",
                'created_at' => now(),
            ],
        ]);
    }
}
