<?php
/**
 * Created by PhpStorm.
 * User: Younes
 * Date: 21/11/2017
 * Time: 10:02
 */


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

$factory->define(App\Spend::class, function (Faker $faker) {
    static $tab = ['in progress', 'paid', 'canceled'];

    return [
        'title' => $faker->sentence(3),
        'description' => $faker->text(30),
        'pay_date' => $faker->dateTime(),
        'status' => $faker->randomElement($tab),
        'price' => $faker->randomFloat(2, 0, 1000)
    ];
});