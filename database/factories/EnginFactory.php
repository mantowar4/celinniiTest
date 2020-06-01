<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Engin;
use Faker\Generator as Faker;

$factory->define(Engin::class, function (Faker $faker) {

    $engin_title = $faker->realText(rand(10,40));
    $engin_short_title = $faker->realText(rand(140,180));

    return [
        'engin_author'=>$faker->name,
        'engin_title'=>$engin_title,
        'engin_short_title'=>$engin_short_title,
        'engin_description'=>$faker->realText(rand(200,600)),
        'created_at'=>$faker->dateTimeBetween('-10 days','-1 days'),
        'updated_at'=>$faker->dateTimeBetween('-10 days','-1 days'),
    ];
});
