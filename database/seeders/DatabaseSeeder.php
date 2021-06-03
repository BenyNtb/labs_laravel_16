<?php

namespace Database\Seeders;



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
            PhotoSeeder::class,
            GenreSeeder::class,
            RoleSeeder::class,
            PosteSeeder::class,
            ArticleBlogSeeder::class,
            UserSeeder::class,
            CarouselSeeder::class,
            VideoSeeder::class,
            DiscoverSeeder::class,
            LogoSeeder::class,
            TestimonialsSeeder::class,
            TeamSeeder::class,
            ReadySeeder::class,
            IconeSeeder::class,
            ServiceSeeder::class,
            ContactSeeder::class,
            ArticleSeeder::class,
            NewsletterSeeder::class,
            CategorieSeeder::class,
            TagSeeder::class,
            BlogTagSeeder::class,
        ]);
    }
}
