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
      factory(App\PortfolioItem::class)->create([
          'title' => 'ReserV Website', 
          'url' => 'reserv-app.nl', 
          'img' => 'reserv-img', 
          'description' => 'Reserv website omschrijving', 
          'thumb' => 'peluche-thumb'
        ]);
      factory(App\PortfolioItem::class)->create([
         'title' => 'ReserV Website', 
         'url' => 'reserv-app.nl', 
         'img' => 'reserv-img', 
         'description' => 'Reserv website omschrijving', 
         'thumb' => 'peluche-thumb'
         ]);
      factory(App\PortfolioItem::class)->create([
         'title' => 'ReserV Website', 
         'url' => 'reserv-app.nl', 
         'img' => 'reserv-img', 
         'description' => 'Reserv website omschrijving', 
         'thumb' => 'peluche-thumb'
      ]);
      factory(App\PortfolioItem::class)->create([
          'title' => 'ReserV', 
          'url' => 'reserv-app.nl/demo', 
          'img' => 'reserv-app-img', 
          'description' => 'Reserv app omschrijving', 
          'thumb' => 'peluche-thumb'
        ]);
      factory(App\PortfolioItem::class)->create([
          'title' => 'Peluche', 
          'url' => 'https://www.labradoodles.it', 
          'img' => 'peluche-img', 
          'description' => 'Dit is een project in opdracht van de fokker van australian labradoodles. Het idee van de website is de gebruikers de sfeer van de fokker te geven, zodat het gelijk duidelijk is om wat voor soort fokker het gaat. Het is een wordpress website met aanpassingen.', 
          'thumb' => 'peluche-thumb'
        ]);
      factory(App\PortfolioItem::class)->create([
          'title' => 'Pride and Joy', 
          'url' => 'https://prideandjoyaustralianlabradoodles.nl/', 
          'img' => 'pride-img', 
          'description' => 'Dit is een project in opdracht van de fokker van australian labradoodles. Het idee van de website is de gebruikers de sfeer van de fokker te geven, zodat het gelijk duidelijk is om wat voor soort fokker het gaat. Het is een wordpress website met aanpassingen.', 
          'thumb' => 'pride-thumb'
        ]);
    }
}
