<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Aluno;
use Faker\Generator as Faker;

$factory->define(Aluno::class, function (Faker $faker) {

    return [
        'nomeAluno' => $faker->word,
        'email' => $faker->word,
        'matricula' => $faker->word,
        'turma' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
