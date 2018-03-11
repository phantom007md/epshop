<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
use Facades\Ybazli\Faker\Faker as PFaker;

$factory->define(App\Guaranty::class, function (Faker $faker) {
    return [
        'company' => $faker->company,
        'exp_time' => Carbon::now(),
    ];
});
