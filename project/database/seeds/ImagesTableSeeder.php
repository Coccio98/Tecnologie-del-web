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
                'product_id' => '1',
                'main' => true,
            ],
            [
                'image' =>'images/product02.png',
                'product_id' => '4',
                'main' => true,
            ],
            [
                'image'=>'images/product03.png',
                'product_id' => '1',
                'main' => false,
            ],
            [
                'image'=>'images/product04.png',
                'product_id' => '3',
                'main' => true,
            ],
            [
                'image'=>'images/product05.png',
                'product_id' => '2',
                'main' => true,
            ],
            [
                'image'=>'images/product06.png',
                'product_id' => '1',
                'main' => false,
            ],
            [
                'image'=>'images/product07.png',
                'product_id' => '2',
                'main' => false,
            ],
            [
                'image'=>'images/product08.png',
                'product_id' => '3',
                'main' => false,
            ]
        ]);
    }
}
