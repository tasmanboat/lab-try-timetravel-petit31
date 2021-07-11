<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    $paragraphs = $faker->paragraphs(3);
    $content = '';
    foreach ($paragraphs as $para) {
        $content .= '<p>' . $para . '</p>';
    }
    return [
        // 'user_id' =>,
        'title'      => $faker->sentence(),
        'content'    => $content,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
