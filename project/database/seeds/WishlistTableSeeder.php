<?php

use Illuminate\Database\Seeder;

class WishlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wishlist') ->insert([
            [
                'user_id' => '3',
                'product_id' => '5'
            ],
            [
                'user_id' => '3',
                'product_id' => '2'
            ],
            [
                'user_id' => '1',
                'product_id' => '3'
            ],
            [
                'user_id' => '2',
                'product_id' => '5'
            ],
            [
                'user_id' => '6',
                'product_id' => '2'
            ],
            [
                'user_id' => '4',
                'product_id' => '1'
            ],
            [
                'user_id' => '5',
                'product_id' => '4'
            ],
            [
                'user_id' => '3',
                'product_id' => '4'
            ]
        ]);
    }
}
