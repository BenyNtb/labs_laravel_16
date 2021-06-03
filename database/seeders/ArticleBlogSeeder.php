<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_blogs')->insert([
            [
                'image' => 'blog/blog-2.jpg',
                'titre' => 'JUST A SIMPLE BLOG POST',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'created_at' => now(),
            ],
            [
                'image' => 'blog/blog-1.jpg',
                'titre' => 'JUST A SIMPLE BLOG POST',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'created_at' => now(),
            ],
            [
                'image' => 'blog/blog-3.jpg',
                'titre' => 'JUST A SIMPLE BLOG POST',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'created_at' => now(),
            ],
        ]);
    }
}
