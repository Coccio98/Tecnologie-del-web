<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BelongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('belong')->insert([
            [
                'product_id'=>'1',
                'category_id'=>'3'
            ],
            [
                'product_id'=>'2',
                'category_id'=>'4'
            ],
            [
                'product_id'=>'3',
                'category_id'=>'1'
            ],
            [
                'product_id'=>'4',
                'category_id'=>'1'
            ],
            [
                'product_id'=>'5',
                'category_id'=>'2'
            ],
            [
                'product_id'=>'6',
                'category_id'=>'1'
            ],
            [
                'product_id'=>'7',
                'category_id'=>'1'
            ],
            [
                'product_id'=>'8',
                'category_id'=>'1'
            ],
            [
                'product_id'=>'9',
                'category_id'=>'1'
            ]
        ]);
    }

}
