<?php

use Illuminate\Database\Seeder;

class GeneralLedgersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Accounts::all() as $account) {
            factory(App\Models\GeneralLedgers::class, 30)->create(
                [
                    'account_id' => $account->id,
                    
                ]
            );
        }
    }
}
