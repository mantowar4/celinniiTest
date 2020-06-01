<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {

    $news_title = $faker->realText(rand(10,40));
    $news_short_title = $faker->realText(rand(140,180));

    return [
        'news_title'=>$news_title,
        'news_short_title'=>$news_short_title,
        'news_description'=>$faker->realText(rand(200,600)),
        'created_at'=>$faker->dateTimeBetween('-10 days','-1 days'),
        'updated_at'=>$faker->dateTimeBetween('-10 days','-1 days'),
    ];
});
