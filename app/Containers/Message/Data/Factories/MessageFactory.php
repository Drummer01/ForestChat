<?php

$factory->define(\App\Containers\Message\Models\Message::class, function (Faker\Generator $faker) {
    return [
        'message'   => $faker->sentence(),
        'type'      => 'message/text'
    ];
});