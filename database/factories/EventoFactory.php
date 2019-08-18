<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Evento;
use Faker\Generator as Faker;

$factory->define(Evento::class, function (Faker $faker) {

    return [
        'nomePalestra' => $faker->word,
        'nomePalestrante' => $faker->word,
        'descricao' => $faker->word,
        'infoLocal' => $faker->word,
        'data' => $faker->word,
        'horasComplementares' => $faker->randomDigitNotNull,
        'capacidade' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
