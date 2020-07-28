<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PortfolioItem;
use Faker\Generator as Faker;

$factory->define(PortfolioItem::class, function (Faker $faker) {
    return [
      'title' => $faker->name,
      'url' => $faker->url,
      'img' => $faker->url,
      'description' => $faker->text,
      'thumb' => $faker->url
    ];
});
