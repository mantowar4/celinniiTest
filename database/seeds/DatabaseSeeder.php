<?php

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
        factory(\App\News::class, 10)->create();
        factory(\App\Engin::class, 10)->create();
        factory(\App\Post::class, 10)->create();
    }
}
