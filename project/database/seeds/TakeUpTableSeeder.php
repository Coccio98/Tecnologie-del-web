<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TakeUpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('take_up')->insert([
            [
                'courier_id'=>'3',
                'shipping_id'=>'1'
            ],
            [
                'courier_id'=>'2',
                'shipping_id'=>'3'
            ],
            [
                'courier_id'=>'8',
                'shipping_id'=>'6'
            ],
            [
                'courier_id'=>'5',
                'shipping_id'=>'5'
            ],
            [
                'courier_id'=>'6',
                'shipping_id'=>'2'
            ],
            [
                'courier_id'=>'7',
                'shipping_id'=>'4'
            ]
        ]);
    }
}
