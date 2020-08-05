
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
          'img' => 'no-img.png', 
          'description' => 'Reserv website omschrijving', 
          'thumb' => 'no-img.png'
        ]);
      factory(App\PortfolioItem::class)->create([
         'title' => 'ReserV Website', 
         'url' => 'reserv-app.nl', 
         'img' => 'no-img.png', 
         'description' => 'Reserv website omschrijving', 
         'thumb' => 'no-img.png'
         ]);
      factory(App\PortfolioItem::class)->create([
         'title' => 'ReserV Website', 
         'url' => 'reserv-app.nl', 
         'img' => 'no-img.png', 
         'description' => 'Reserv website omschrijving', 
         'thumb' => 'no-img.png'
      ]);
      factory(App\PortfolioItem::class)->create([
          'title' => 'ReserV', 
          'url' => 'reserv-app.nl/demo', 
          'img' => 'reserv-app-img.png', 
          'description' => 'Reserv app omschrijving', 
          'thumb' => 'peluche-thumb.png'
        ]);
      factory(App\PortfolioItem::class)->create([
          'title' => 'Peluche', 
          'url' => 'https://www.labradoodles.it', 
          'img' => 'peluche-img.png', 
          'description' => 'Dit is een project in opdracht van de fokker van australian labradoodles. Het idee van de website is de gebruikers de sfeer van de fokker te geven, zodat het gelijk duidelijk is om wat voor soort fokker het gaat. Het is een wordpress website met aanpassingen.', 
          'thumb' => 'peluche-thumb.png'
        ]);
      factory(App\PortfolioItem::class)->create([
          'title' => 'Pride and Joy', 
          'url' => 'https://prideandjoyaustralianlabradoodles.nl/', 
          'img' => 'pride-img.png', 
          'description' => 'Dit is een project in opdracht van de fokker van australian labradoodles. Het idee van de website is de gebruikers de sfeer van de fokker te geven, zodat het gelijk duidelijk is om wat voor soort fokker het gaat. Het is een wordpress website met aanpassingen.', 
          'thumb' => 'pride-thumb.png'
        ]);
    }
}
