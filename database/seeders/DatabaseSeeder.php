<?php

namespace Database\Seeders;

use App\Http\Controllers\UserController;
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
        $this->call(AdminSeeder::class);
        $this->call(ArticleCategorySeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(GiftSeeder::class);
        $this->call(RequestSeeder::class);
        $this->call(UserSeeder::class);
    }
}
