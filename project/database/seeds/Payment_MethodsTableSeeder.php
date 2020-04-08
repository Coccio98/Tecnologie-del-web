<?php

use Illuminate\Database\Seeder;

class Payment_MethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods') ->insert([
            [
                'expiring' => '10/2024',
                'cardHolder' => 'Alessia Rossi',
                'cardNumber' => '4023600965237798',
                'user_id' => '1'
            ],
            [
                'expiring' => '07/2024',
                'cardHolder' => 'Francesco Di Giuseppe',
                'cardNumber' => '4021556972454487',
                'user_id' => '2'
            ],
            [
                'expiring' => '12/2022',
                'cardHolder' => 'Alessia Rossi',
                'cardNumber' => '4023598725637769',
                'user_id' => '1'
            ],
            [
                'expiring' => '10/2024',
                'cardHolder' => 'Giulia Bianchi',
                'cardNumber' => '4023698754231458',
                'user_id' => '3'
            ],
            [
                'expiring' => '12/2026',
                'cardHolder' => 'Alessio Franchi',
                'cardNumber' => '4025897415361157',
                'user_id' => '5'
            ],
            [
                'expiring' => '12/2021',
                'cardHolder' => 'Giovanni Di Marco',
                'cardNumber' => '4023698711541157',
                'user_id' => '6'
            ]
        ]);
    }
}
