<?php

use Faker\Generator as Faker;

$factory->define(App\Leads::class, function (Faker $faker) {
    return [
        'user_id'=> function () {
            return factory('App\Users') ->create()->id;
        },
        'created_by' => 1,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'town' => $faker->state,
        'country' => $faker->country,
        'note' => $faker->text($maxNbChars = 250),
        'isClient' => false,
        'isClaimable' => true,
        'assigned' => 1,
        'date_assigned' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
