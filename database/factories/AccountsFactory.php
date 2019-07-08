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

$factory->define(App\Models\Accounts::class, function (Faker $faker) {
    return [
        'parent_id' => $faker->randomElement([1, 2, 3, 4, 5]),
        'account_name' => $faker->name,
        'account_code' => $faker->randomElement(['A11', 'A111', 'B11', 'B111', 'B112']),
        'account_type' => $faker->randomElement(['Asset','Liability','Equity','Expense','Income']),
        'account_balance' => $faker->numberBetween(100000, 150000)
    ];
});
