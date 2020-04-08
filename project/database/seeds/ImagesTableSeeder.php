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
                'image'=>'public/images/produt01.png',
                'product_id' => '1'
            ],
            [
                'image' =>'public/images/product02.png',
                'product_id' => '4'
            ],
            [
                'image'=>'public/images/product03.png',
                'product_id' => '1'
            ],
            [
                'image'=>'public/images/product04.png',
                'product_id' => '3'
            ],
            [
                'image'=>'public/images/product05.png',
                'product_id' => '2'
            ],
            [
                'image'=>'public/images/product06.png',
                'product_id' => '1'
            ],
            [
                'image'=>'public/images/product07.png',
                'product_id' => '2'
            ],
            [
                'image'=>'public/images/product08.png',
                'product_id' => '3'
            ]
        ]);
    }
}
