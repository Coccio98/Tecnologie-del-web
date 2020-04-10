<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComposeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compose')->insert([
            [
                'quantity'=>'2',
                'price-stamp'=>'10.0',
                'product_id'=>'1',
                'order_id'=>'3'
            ],
            [
                'quantity'=>'3',
                'price-stamp'=>'0.5',
                'product_id'=>'2',
                'order_id'=>'4'
            ],
            [
                'quantity'=>'1',
                'price-stamp'=>'2.4',
                'product_id'=>'3',
                'order_id'=>'1'
            ],
            [
                'quantity'=>'1',
                'price-stamp'=>'5.7',
                'product_id'=>'4',
                'order_id'=>'5'
            ],
            [
                'quantity'=>'2',
                'price-stamp'=>'16.0',
                'product_id'=>'5',
                'order_id'=>'2'
            ]
        ]);
    }


}
