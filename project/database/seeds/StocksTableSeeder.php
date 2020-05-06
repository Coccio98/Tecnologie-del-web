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
                'number'=>'2',
                'product_id'=>'1'
            ],
            [
                'color'=>'blue',
                'size'=>'large',
                'number'=>'99',
                'product_id'=>'4'
            ],
            [
                'color'=>'green',
                'size'=>'medium',
                'number'=>'51',
                'product_id'=>'2'
            ],
            [
                'color'=>'grey',
                'size'=>'small',
                'number'=>'62',
                'product_id'=>'5'
            ],
            [
                'color'=>'black',
                'size'=>'large',
                'number'=>'23',
                'product_id'=>'3'
            ],
            [
                'color'=>'blue',
                'size'=>'small',
                'number'=>'4',
                'product_id'=>'1'
            ],
            [
                'color'=>'green',
                'size'=>'small',
                'number'=>'7',
                'product_id'=>'1'
            ],
            [
                'color'=>'green',
                'size'=>'big',
                'number'=>'7',
                'product_id'=>'1'
            ],
        ]);
    }
}
