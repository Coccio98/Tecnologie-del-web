<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart') ->insert([
            [
                'quantity' => '2',
                'user_id' => '3',
                'stock_id' => '5'
            ],
            [
                'quantity' => '1',
                'user_id' => '3',
                'stock_id' => '2'
            ],
            [
                'quantity' => '2',
                'user_id' => '1',
                'stock_id' => '1'
            ],
            [
                'quantity' => '1',
                'user_id' => '2',
                'stock_id' => '5'
            ],
            [
                'quantity' => '1',
                'user_id' => '6',
                'stock_id' => '2'
            ],
            [
                'quantity' => '1',
                'user_id' => '4',
                'stock_id' => '1'
            ],
            [
                'quantity' => '1',
                'user_id' => '5',
                'stock_id' => '4'
            ],
            [
                'quantity' => '1',
                'user_id' => '3',
                'stock_id' => '4'
            ]
        ]);
    }
}
