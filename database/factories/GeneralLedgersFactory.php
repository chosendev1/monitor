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

$factory->define(App\Models\GeneralLedger::class, function (Faker $faker) {
    return [
        'account_id' => $faker->randomElement([1, 2, 3, 4, 5]),
        'transaction_date' => $faker->dateTime($max = 'now'),
        'transaction_type' => $faker->randomElement(['witdrawal','deposit','disbursement']),
        'receipt_or_voucher_no' => $faker->randomElement(['Asset','Liability','Equity','Expense','Income']),
        'credit' => $faker->numberBetween(100000, 150000),
        'debit' => $faker->numberBetween(100000, 150000),
        'description_or_reason' => $faker->sentence()
    ];
});
