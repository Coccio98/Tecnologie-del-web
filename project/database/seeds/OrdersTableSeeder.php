<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'number'=>'#'.str_pad(1, 10, "0", STR_PAD_LEFT),
                'total'=>'213.5',
                'delivery_date' => '2020-04-19',
                'user_id'=>'1',
                'shipping_id'=>'4',
                'address_id'=>'3',
                'payment_method_id'=>'2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'number'=>'#'.str_pad(2, 10, "0", STR_PAD_LEFT),
                'total'=>'99.99',
                'delivery_date' => '2020-05-29',
                'user_id'=>'2',
                'shipping_id'=>'2',
                'address_id'=>'2',
                'payment_method_id'=>'2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'number'=>'#'.str_pad(3, 10, "0", STR_PAD_LEFT),
                'total'=>'780.32',
                'delivery_date' => '2020-07-19',
                'user_id'=>'2',
                'shipping_id'=>'3',
                'address_id'=>'1',
                'payment_method_id'=>'1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'number'=>'#'.str_pad(4, 10, "0", STR_PAD_LEFT),
                'total'=>'321.0',
                'delivery_date' => '2020-05-13',
                'user_id'=>'3',
                'shipping_id'=>'1',
                'address_id'=>'4',
                'payment_method_id'=>'1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'number'=>'#'.str_pad(5, 10, "0", STR_PAD_LEFT),
                'total'=>'284.0',
                'delivery_date' => '2020-06-06',
                'user_id'=>'5',
                'shipping_id'=>'2',
                'address_id'=>'1',
                'payment_method_id'=>'2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
