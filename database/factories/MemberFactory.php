<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'picture'   => $faker->imageUrl($width = 640, $height = 480),
        'quote'  => $faker->sentence,

        'position' => $faker->word,
        'links' => function () use ($faker) {
            return  ['facebook' => $faker->url, 'Insta' => $faker->url];
        }
    ];
});
