<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
    	'project_id' => $faker->randomElement(App\Project::all()->map->id),
        'description' => $faker->word,
        'completed' => $faker->boolean
    ];
});
