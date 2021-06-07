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
            RoleSeeder::class,
            GenreSeeder::class,
            PhotoSeeder::class,
            PosteSeeder::class,
            UserSeeder::class,
            CarouselSeeder::class,
            VideoSeeder::class,
            LogoSeeder::class,
            TestimonialsSeeder::class,
            TeamSeeder::class,
            ReadySeeder::class,
            IconeSeeder::class,
            ServiceSeeder::class,
            DiscoverSeeder::class,
            ArticleSeeder::class,
            CategorieSeeder::class,
            BlogSeeder::class,
            TagSeeder::class,
            BlogTagSeeder::class,
            ContactSeeder::class,
        ]);
    }
}
