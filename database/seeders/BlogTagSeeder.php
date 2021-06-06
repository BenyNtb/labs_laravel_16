<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogtags')->insert([
            [
                'blog_id' => 1,
                'tag_id' => 1,
                'created_at' => now(),
            ],
        ]);
    }
}
