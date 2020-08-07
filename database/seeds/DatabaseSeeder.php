
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
         'img' => 'reserv-img.png', 
         'description' => 'De ReserV website is gemaakt als presentatie voor de applicatie zelf, het idee van de website is een soepele/simpele website die de nadruk legt op het bekijken van de demo van de app zelf. Het is een Single Page Application die volledig gemaakt is in Vue.js', 
         'thumb' => 'reserv-thumb.png'
      ]);
      factory(App\PortfolioItem::class)->create([
          'title' => 'ReserV App', 
          'url' => 'reserv-app.nl/demo', 
          'img' => 'reserv-app-img.png', 
          'description' => 'De ReserV App is een applicatie die de reserveringsregistratie van het bedrijf makkelijker en sneller maakt. De App neemt zorgt ervoor dat iedereen makkelijk reserveringen toe kan voegen en denkt mee waar dat nodig is. Deze App is gemaakt in Vue.js in combinatie met Laravel ', 
          'thumb' => 'reserv-app-thumb.png'
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
