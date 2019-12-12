<?php

use Faker\Generator as Faker;

$factory->define(App\Attendance::class, function (Faker $faker) {
    return [
        'turn_number'=>$faker->unique()->randomNumber(3),
        'registered_time'=>$faker->dateTime(),
        'registered_by_user'=> '1',
        'registered_by_station'=>$faker->localIpv4(),
        'registered_by_comments'=>$faker->sentence(7),
        //'called_time'=>$faker->dateTime(),
        //'called_by_user'=>'1',
        //'called_by_station'=>$faker->localIpv4(),
        //'finished_time'=>$faker->dateTime(),
        //'finished_by_user'=>'1',
        //'finished_by_comments'=>$faker->sentence(7),
        //'finished_by_station'=>$faker->localIpv4(),
        'client_number'=>$faker->unique()->randomNumber(5),
        'client_name'=>$faker->name(),
        'heard_about_us'=>$faker->randomElement(['Radio', 'TV', 'Newspaper', 'Billbord', 'Website']),
        'heard_about_us_message'=>$faker->sentence(5),
        'branch_id'=>'1',
        //'referred_to'=>'1',
        //'last_referred_to_user'=>'1',
        'express'=>$faker->boolean(20),
        'status_id'=>$faker->numberBetween(1,5),
        //'diff_registered_called_time'=>'',
        //'diff_called_finished_time'=>'',
        'appointment'=>$faker->boolean(10),
        'urgency_id'=>$faker->numberBetween(1,3),
    ];
});
