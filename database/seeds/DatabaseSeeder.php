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
      factory(App\PortfolioItem::class)->create(['title' => 'Kasper', 'url' => 'google.com', 'imgUrl' => 'test', 'description' => 'Lorem ipsum']);
      factory(App\PortfolioItem::class)->create(['title' => 'Kasper', 'url' => 'google.com', 'imgUrl' => 'test', 'description' => 'Lorem ipsum']);
      factory(App\PortfolioItem::class)->create(['title' => 'Kasper', 'url' => 'google.com', 'imgUrl' => 'test', 'description' => 'Lorem ipsum']);
      factory(App\PortfolioItem::class)->create(['title' => 'Kasper', 'url' => 'google.com', 'imgUrl' => 'test', 'description' => 'Lorem ipsum']);
    }
}
