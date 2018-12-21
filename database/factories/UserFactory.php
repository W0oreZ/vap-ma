<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Annonce::class,function(Faker $faker){
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'ville_id' => function(){
            return factory('App\Models\Ville')->create()->id;
        },
        'categorie_id' => function(){
            return factory('App\Models\Categorie')->create()->id;
        },
        'slug' => $faker->unique()->name,
        'prix' => $faker->numberBetween(12540,3000),
        'user_id' => function(){
            return factory('App\Models\Profile')->create()->user_id;
        },

    ];
});

$factory->define(App\Models\Ville::class,function(Faker $faker){
    return [
        'name' => $faker->sentence(6),
    ];
});

$factory->define(App\Models\Categorie::class,function(Faker $faker){
    return [
        'name' => $faker->sentence(6),
    ];
});

$factory->define(App\Models\Profile::class,function(Faker $faker){
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'description' => $faker->paragraph,
        'adresse' => $faker->streetAddress,
        'telephone' => $faker->phoneNumber,
        'image' => 'gAvatar.png',
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },
    ];
});
