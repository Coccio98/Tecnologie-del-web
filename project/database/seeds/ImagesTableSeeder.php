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
                'image'=>'img/produt01.png'
            ],
            [
                'image' =>'img/product02.png'
            ],
            [
                'image'=>'img/product03.png'
            ],
            [
                'image'=>'img/product04.png'
            ],
            [
                'image'=>'img/product05.png'
            ],
            [
                'image'=>'img/product06.png'
            ],
            [
                'image'=>'img/product07.png'
            ],
            [
                'image'=>'img/product08.png'
            ]
        ]);
    }
}
