<?php

$factory->define(\App\Containers\Message\Models\Attachment::class, function (Faker\Generator $faker) {
    return [
        'original_source'   => $faker->imageUrl(800, 600, 'cats'),
        'type'      => 'image/png'
    ];
});