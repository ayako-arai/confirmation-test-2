<?php

use Faker\Generator as Faker;

public function definition(): array
{
    return [
        'name' => fake()->name(),
        'price' => fake()->integer(),
        'image' => fake()->imageUrl(),
        'description' => fake()->text(),
    ];
}

