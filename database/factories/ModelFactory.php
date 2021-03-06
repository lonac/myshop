<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => ucfirst($faker->unique()->word),
    ];
});

$factory->define(App\Subcategory::class, function (Faker\Generator $faker) {

    return [
        'name' => ucfirst($faker->unique()->word),
        'category_id' => function () {
            return factory('App\Category')->create()->id;
        },
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {

    return [
        'categoryname' => ucfirst($faker->word),
        'subcategoryname' => ucfirst($faker->word),
        'name' => ucfirst($faker->unique()->word),
        'manufacturer' => $faker->company,
        'body' => $faker->paragraph,
        'cost' => $faker->randomNumber,
    ];
});

$factory->define(App\ProductsPhoto::class, function (Faker\Generator $faker) {

    return [
        'product_id' => function () {
            return factory('App\Product')->create()->id;
        },
        'filename' => $faker->imageUrl
    ];
});
