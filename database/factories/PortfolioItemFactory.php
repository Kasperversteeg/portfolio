<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PortfolioItem;
use Faker\Generator as Faker;

$factory->define(PortfolioItem::class, function (Faker $faker) {
    return [
      'title' => $faker->name,
      'url' => $faker->url,
      'imgUrl' => $faker->url,
      'description' => $faker->text
    ];
});
