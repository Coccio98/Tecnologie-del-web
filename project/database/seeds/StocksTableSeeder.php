<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
            [
                'color'=>'red',
                'size'=>'small',
                'quantity'=>'2',
                'product_id'=>'1'
            ],
            [
                'color'=>'blue',
                'size'=>'large',
                'quantity'=>'99',
                'product_id'=>'4'
            ],
            [
                'color'=>'green',
                'size'=>'medium',
                'quantity'=>'51',
                'product_id'=>'2'
            ],
            [
                'color'=>'grey',
                'size'=>'small',
                'quantity'=>'62',
                'product_id'=>'5'
            ],
            [
                'color'=>'black',
                'size'=>'large',
                'quantity'=>'23',
                'product_id'=>'3'
            ]
        ]);
    }
}