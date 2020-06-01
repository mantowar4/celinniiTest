<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $post_title = $faker->realText(rand(10,40));
    $post_short_title = $faker->realText(rand(140,180));

    return [
        'post_author'=>$faker->name,
        'post_title'=>$post_title,
        'post_short_title'=>$post_short_title,
        'post_description'=>$faker->realText(rand(200,600)),
        'created_at'=>$faker->dateTimeBetween('-10 days','-1 days'),
        'updated_at'=>$faker->dateTimeBetween('-10 days','-1 days'),
    ];
});
