<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nom' => 'Labs',
                'prenom' => 'Admin',
                'role_id' => 1,
                'genre_id' => 2,
                'poste_id' => 1,
                'photo_id' => 1,
                "validate" => 1,
                'email' => "admin@labs.com",
                'password' =>Hash::make('admin2021'),
                'created_at'=> now(),
            ],
            [
                'nom' => 'Labs',
                'prenom' => 'Webmaster',
                'role_id' => 2,
                'genre_id' => 2,
                'poste_id' => 2,
                'photo_id' => 2,
                "validate" => 1,
                'email' => "webmaster@labs.com",
                'password' =>Hash::make('webmaster2021'),
                'created_at'=> now(),
            ],
            [
                'nom' => 'Labs',
                'prenom' => 'Redacteur',
                'role_id' => 3,
                'genre_id' => 1,
                'poste_id' => 3,
                'photo_id' => 3,
                "validate" => 1,
                'email' => "redacteur@labs.com",
                'password' =>Hash::make('redacteur2021'),
                'created_at' => now(),
            ],
            [
                'nom' => 'Labs',
                'prenom' => 'Membre',
                'role_id' => 4,
                'poste_id' => 4,
                'photo_id' => 4,
                'genre_id' => 1,
                "validate" => 0,
                'email' => "membre@labs.com",
                'password' =>Hash::make('membre2021'),
                'created_at' => now(),
            ],
        ]);
    }
}
