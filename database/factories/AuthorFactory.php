<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,//$faker laravel kintamasis skirtas netikru duomenu uzpildymui
        'surname' => $faker->sentence(4), //sugeneruos atsitiktin sakini, kuriame yra 4 zodziai
        'username' => Str::random(15), //zodi, kuris turi 15 simboliu
    ];

    // return [
    //     'name' => $this->faker->name,//$faker laravel kintamasis skirtas netikru duomenu uzpildymui
    //     'surname' => $this->faker->sentence(4), //sugeneruos atsitiktin sakini, kuriame yra 4 zodziai
    //     'username' => Str::random(15), //zodi, kuris turi 15 simboliu
    // ];


});
