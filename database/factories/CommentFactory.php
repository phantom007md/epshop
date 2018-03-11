<?php

use App\Product;
use App\User;
use Faker\Generator as Faker;
use Facades\Ybazli\Faker\Faker as PFaker;

$factory->define(App\Comment::class, function (Faker $faker) {

    $product_ids = Product::all()->pluck('id');
    $user_ids= User::all()->pluck('id');

    return [
        'body' => PFaker::paragraph(),
        'product_id' => $product_ids->random(),
        'user_id' => $user_ids->random(),
    ];
});

