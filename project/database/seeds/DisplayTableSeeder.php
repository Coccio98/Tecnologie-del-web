<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisplayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('display')->insert([
            [
                'product_id'=>'3',
                'showcase_id'=>'1'
            ],
            [
                'product_id'=>'4',
                'showcase_id'=>'1'
            ],
            [
                'product_id'=>'2',
                'showcase_id'=>'2'
            ],
            [
                'product_id'=>'3',
                'showcase_id'=>'3'
            ],
            [
                'product_id'=>'4',
                'showcase_id'=>'2'
            ],
            [
                'product_id'=>'5',
                'showcase_id'=>'1'
            ],
            [
                'product_id'=>'6',
                'showcase_id'=>'1'
            ],
            [
                'product_id'=>'1',
                'showcase_id'=>'1'
            ],
        ]);
    }
}
