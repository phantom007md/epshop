<?php

use App\Guaranty;
use Faker\Generator as Faker;
use Facades\Ybazli\Faker\Faker as  PFaker;

$factory->define(App\Product::class, function (Faker $faker) {
    $guaranty_ids = Guaranty::all()->pluck('id');
    return [
        'name' => PFaker::sentence(),
        'type' => PFaker::word(),
        'price' => $faker->numberBetween(300, 3000000),
        'body' => PFaker::paragraph(),
        'img' => $faker->imageUrl(),
        'guaranty_id' => $guaranty_ids->random(),
    ];
});
