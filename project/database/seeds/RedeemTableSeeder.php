<?php

use Illuminate\Database\Seeder;

class RedeemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('redeem') ->insert([
            [
                'used' => false,
                'coupon_id' => '1',
                'user_id' => '1'
            ],
            [
                'used' => true,
                'coupon_id' => '2',
                'user_id' => '1'
            ],
            [
                'used' => false,
                'coupon_id' => '3',
                'user_id' => '6'
            ],
            [
                'used' => false,
                'coupon_id' => '4',
                'user_id' => '5'
            ],
            [
                'used' => true,
                'coupon_id' => '5',
                'user_id' => '1'
            ],
            [
                'used' => false,
                'coupon_id' => '6',
                'user_id' => '4'
            ],
            [
                'used' => true,
                'coupon_id' => '7',
                'user_id' => '3'
            ],
            [
                'used' => false,
                'coupon_id' => '1',
                'user_id' => '2'
            ],
        ]);
    }
}
