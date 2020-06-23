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
                'number'=>'0',
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
            [
                'color'=>'red',
                'size'=>'64 GB',
                'number'=>'15',
                'product_id'=>'10'
            ],
            [
                'color'=>'white',
                'size'=>'128 GB',
                'number'=>'12',
                'product_id'=>'10'
            ],
            [
                'color'=>'red',
                'size'=>'64 GB',
                'number'=>'15',
                'product_id'=>'11'
            ],
            [
                'color'=>'white',
                'size'=>'128 GB',
                'number'=>'12',
                'product_id'=>'11'
            ],
            [
                'color'=>'black',
                'size'=>'256 GB',
                'number'=>'15',
                'product_id'=>'12'
            ],
            [
                'color'=>'gray',
                'size'=>'256 GB',
                'number'=>'12',
                'product_id'=>'12'
            ],
            [
                'color'=>'black',
                'size'=>'1 TB',
                'number'=>'10',
                'product_id'=>'13'
            ],
            [
                'color'=>'black',
                'size'=>'42\'\' ',
                'number'=>'24',
                'product_id'=>'14'
            ],
            [
                'color'=>'black',
                'size'=>'2.7\'\'',
                'number'=>'15',
                'product_id'=>'15'
            ],
            [
                'color'=>'black',
                'size'=>'16 MP',
                'number'=>'15',
                'product_id'=>'16'
            ],
            [
                'color'=>'silver',
                'size'=>'10000 mAh',
                'number'=>'12',
                'product_id'=>'17'
            ],
            [
                'color'=>'black',
                'size'=>'large',
                'number'=>'15',
                'product_id'=>'18'
            ],
            [
                'color'=>'black',
                'size'=>'43\'\'',
                'number'=>'12',
                'product_id'=>'19'
            ],
            [
                'color'=>'silver',
                'size'=>'256 GB',
                'number'=>'12',
                'product_id'=>'20'
            ]
        ]);
    }
}
