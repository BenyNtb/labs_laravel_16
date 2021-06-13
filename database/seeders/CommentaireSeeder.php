<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            [
                "auteur" => "Paulo Coelho",
                "email" => "comment@gmail.be",
                "message" => "Commentaire validé",
                "blog_id" => 1,
                "validate" => 1,
                "created_at" => now(),
            ],
            [
                "auteur" => "Cristine Guillen",
                "email" => "cristine@gmail.be",
                "message" => "Commentaire pas validé",
                "blog_id" => 1,
                "validate" => 0,
                "created_at" => now(),
            ]
        ]);
    }
}
