<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'image'=>'images/product01.png',
                'product_id' => '1'
            ],
            [
                'image' =>'images/product02.png',
                'product_id' => '4'
            ],
            [
                'image'=>'images/product03.png',
                'product_id' => '1'
            ],
            [
                'image'=>'images/product04.png',
                'product_id' => '3'
            ],
            [
                'image'=>'images/product05.png',
                'product_id' => '2'
            ],
            [
                'image'=>'images/product06.png',
                'product_id' => '1'
            ],
            [
                'image'=>'images/product07.png',
                'product_id' => '2'
            ],
            [
                'image'=>'images/product08.png',
                'product_id' => '3'
            ]
        ]);
    }
}
