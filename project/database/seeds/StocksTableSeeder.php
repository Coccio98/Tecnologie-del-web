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
                'quantity'=>'2'
            ],
            [
                'color'=>'blue',
                'size'=>'large',
                'quantity'=>'99'
            ],
            [
                'color'=>'green',
                'size'=>'medium',
                'quantity'=>'51'
            ],
            [
                'color'=>'grey',
                'size'=>'small',
                'quantity'=>'62'
            ],
            [
                'color'=>'black',
                'size'=>'large',
                'quantity'=>'23'
            ],
            [
                'color'=>'white'
            ]
    ]);
    }
}
