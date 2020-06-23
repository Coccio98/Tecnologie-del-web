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
                'image'=>'images/HuaweiLaptop2.jpg',
                'product_id' => '9',
                'main' => true,
            ],
            [
                'image'=>'images/HuaweiLaptop.jpg',
                'product_id' => '8',
                'main' => true,
            ],
            [
                'image'=>'images/AcerLaptop2.jpg',
                'product_id' => '7',
                'main' => true,
            ],
            [
                'image'=>'images/AcerLaptop.jpg',
                'product_id' => '6',
                'main' => true,
            ],

            [
                'image'=>'images/31GApRrUpKL._AC_.jpg
',
                'product_id' => '13',
                'main' => false,
            ],
            [
                'image'=>'images/51rnrQAX9fL._AC_SL1000_.jpg',
                'product_id' => '13',
                'main' => true,
            ],
            [
                'image'=>'images/61NCF56lnfL._AC_SL1000_.jpg',
                'product_id' => '12',
                'main' => true,
            ],
            [
                'image'=>'images/91F4dCgu-LL._AC_SL1500_.jpg',
                'product_id' => '19',
                'main' => true,
            ],
            [
                'image'=>'images/Iphone SE main.jpg',
                'product_id' => '10',
                'main' => true,
            ],
            [
                'image'=>'images/Iphone SE.jpg',
                'product_id' => '10',
                'main' => false,
            ],
            [
                'image'=>'images/Iphone.jpg',
                'product_id' => '11',
                'main' => true,
            ],
            [
                'image'=>'images/Iphone2.jpg',
                'product_id' => '11',
                'main' => false,
            ],
            [
                'image'=>'images/Iphone3.jpg',
                'product_id' => '11',
                'main' => false,
            ],
            [
                'image'=>'images/Mac.jpg',
                'product_id' => '20',
                'main' => true,
            ],
            [
                'image'=>'images/PowerBank.jpg',
                'product_id' => '17',
                'main' => true,
            ],
            [
                'image'=>'images/PowerBank2.jpg',
                'product_id' => '17',
                'main' => false,
            ],
            [
                'image'=>'images/Videocamera.jpg',
                'product_id' => '15',
                'main' => true,
            ],
            [
                'image'=>'images/81CYTA56Q6L._AC_SL1500_.jpg',
                'product_id' => '16',
                'main' => true,
            ],
            [
                'image'=>'images/smart_tv.jpg',
                'product_id' => '14',
                'main' => true,
            ]
        ]);
    }
}
