<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'image' => 'blog/blog-2.jpg',
                'titre' => 'JUST A SIMPLE BLOG POST',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'categorie_id' => 1,
                'created_at' => now(),
            ],
            [
                'image' => 'blog/blog-1.jpg',
                'titre' => 'JUST A SIMPLE BLOG POST',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'categorie_id' => 2,
                'created_at' => now(),
            ],
            [
                'image' => 'blog/blog-3.jpg',
                'titre' => 'JUST A SIMPLE BLOG POST',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'categorie_id' => 3,
                'created_at' => now(),
            ],
            [
                'image' => 'blog/blog-2.jpg',
                'titre' => 'JUST A SIMPLE BLOG POST',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'categorie_id' => 4,
                'created_at' => now(),
            ],
            [
                'image' => 'blog/blog-1.jpg',
                'titre' => 'JUST A SIMPLE BLOG POST',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'categorie_id' => 5,
                'created_at' => now(),
            ],
            [
                'image' => 'blog/blog-3.jpg',
                'titre' => 'JUST A SIMPLE BLOG POST',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'categorie_id' => 6,
                'created_at' => now(),
            ],
        ]);
    }
}
