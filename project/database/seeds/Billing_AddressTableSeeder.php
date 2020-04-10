<?php

use Illuminate\Database\Seeder;

class Billing_AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('billing_address') ->insert([
            [
                'address_id' => '1',
                'payment_methods_id' => '3'
            ],
            [
                'address_id' => '5',
                'payment_methods_id' => '2'
            ],
            [
                'address_id' => '4',
                'payment_methods_id' => '4'
            ],
            [
                'address_id' => '3',
                'payment_methods_id' => '5'
            ],
            [
                'address_id' => '2',
                'payment_methods_id' => '1'
            ],
            [
                'address_id' => '4',
                'payment_methods_id' => '6'
            ]
        ]);
    }
}
