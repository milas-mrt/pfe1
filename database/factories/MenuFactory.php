<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menu;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Menu::class, function (Faker $faker) {
    return [
          'name' => $faker->name,
         'description'=> $faker->paragraph(2),
         'price'=>$faker->numberBetween(99,999),
    ];
});
