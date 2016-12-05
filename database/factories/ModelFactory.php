<?php

/**
 * Define all of our model factories. Model factories give
 * you a convenient way to create models for testing and seeding your
 * database. Just tell the factory how a default model should look.
 *
 * @var \Illuminate\Database\Eloquent\Factory $factory
 */

$factory->define(App\Models\Campaign::class, function (Faker\Generator $faker) {
    $title = $faker->sentence;

    return [
        'slug' => str_slug($title),
        'title' => $title,
        // ...
    ];
});
