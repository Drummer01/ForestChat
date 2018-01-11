<?php

$factory->define(App\Containers\Channel\Models\Channel::class, function (Faker\Generator $faker) {
    return [
        'name'          => $faker->unique()->country,
        'image_url'     => $faker->imageUrl(800, 600, 'cats'),
        'password'      => ''
    ];
});