<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowcasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('showcases')->insert([
            [
                'title'=>'HOT DEAL THIS WEEK',
                'subtitle' =>'NEW COLLECTION UP TO 50% OFF',
                'banner'=>'images/hotdeal.png',
                'expire' => '2020-06-30 00:00:00'
            ],
            [
                'title'=>'MANY COMPUTERS',
                'subtitle' =>'MANY PRODUCTS UP TO 30% OFF',
                'banner'=>'images/Banner-1.jpg',
                'expire' => '2020-07-18 00:00:00'
            ],
            [
                'title'=>'ACCESSORY',
                'subtitle' =>'WHAT ARE YOU WAITING',
                'banner'=>'images/SKN-quality-banner-1.jpg',
                'expire' => '2020-10-10 00:00:00'
            ],
        ]);
    }
}
