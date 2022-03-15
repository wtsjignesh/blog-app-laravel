<?php

use App\Models\Post;
use App\Models\Tag;
use App\User;
use Faker\Generator;

$factory->define(User::class, function (Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Post::class, function (Generator $faker) {
    return [
        'title'        => $faker->sentence,
        'description'  => $faker->paragraph(5),
        'body'         => $faker->paragraph(30),
        'user_id'      => rand(1, 10),
        'is_published' => 1,
    ];
});

$factory->define(Tag::class, function (Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});
