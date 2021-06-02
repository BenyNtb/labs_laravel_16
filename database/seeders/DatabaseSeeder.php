<?php

namespace Database\Seeders;

use App\Models\ArticleBlog;
use App\Models\Phone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArticleSeeder::class,
            ArticleBlog::class,
            CarouselSeeder::class,
            ContactSeeder::class,
            DiscoverSeeder::class,
            GenreSeeder::class,
            IconeSeeder::class,
            LogoSeeder::class,
            NewsletterSeeder::class,
            PhotoSeeder::class,
            PosteSeeder::class,
            ReadySeeder::class,
            RoleSeeder::class,
            ServiceSeeder::class,
            TeamSeeder::class,
            TestimonialsSeeder::class,
            VideoSeeder::class,
            UserSeeder::class,
        ]);
    }
}
