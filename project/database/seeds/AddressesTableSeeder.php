<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses') ->insert([
            [
                'name' => 'Alessia Rossi',
                'address' => 'via Cona,198',
                'city' => 'Teramo',
                'country' => 'Italy',
                'phoneNumber' => '3778598745',
                'user_id' => '1'
            ],
            [
                'name' => 'Alessia Rossi',
                'address' => 'via Cavour,18',
                'city' => 'L\'Aquila',
                'country' => 'Italy',
                'phoneNumber' => '3429863557',
                'user_id' => '1'
            ],
            [
                'name' => 'Francesco Di Giuseppe',
                'address' => 'via Trasimeno,5',
                'city' => 'Pescara',
                'country' => 'Italy',
                'phoneNumber' => '3489685741',
                'user_id' => '2'
            ],
            [
                'name' => 'Giulia Bianchi',
                'address' => 'via Torino,72',
                'city' => 'Roma',
                'country' => 'Italy',
                'phoneNumber' => '3421578947',
                'user_id' => '3'
            ],
            [
                'name' => 'Marta Di Renzo',
                'address' => 'via Savoia,42',
                'city' => 'Chieti',
                'country' => 'Italy',
                'phoneNumber' => '3338841598',
                'user_id' => '4'
            ]
        ]);
    }
}
