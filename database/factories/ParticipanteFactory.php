<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Participante;
use Faker\Generator as Faker;

$factory->define(Participante::class, function (Faker $faker) {

    return [
        'idEvento' => $faker->randomDigitNotNull,
        'idAluno' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
