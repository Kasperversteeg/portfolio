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
      factory(App\PortfolioItem::class)->create(['title' => 'ReserV Website', 'url' => 'google.com', 'img' => 'test', 'description' => 'Lorem ipsum', 'thumb' => 'port-2-thumb']);
      factory(App\PortfolioItem::class)->create(['title' => 'ReserV', 'url' => 'google.com', 'img' => 'test', 'description' => 'Lorem ipsum', 'thumb' => 'port-2-thumb']);
      factory(App\PortfolioItem::class)->create(['title' => 'Peluche', 'url' => 'google.com', 'img' => 'test', 'description' => 'Lorem ipsum', 'thumb' => 'port-2-thumb']);
      factory(App\PortfolioItem::class)->create(['title' => 'Pride and Joy', 'url' => 'google.com', 'img' => 'test', 'description' => 'Lorem ipsum', 'thumb' => 'port-2-thumb']);
    }
}
