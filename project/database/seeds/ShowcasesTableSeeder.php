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
                'name'=>'Laptop',
                'image'=>'images/produt03.png',
                'expire' => '2020-12-20 00:00:00'
            ],
            [
                'name'=>'Samsung',
                'image' => 'images/product02.png',
                'expire' => '2020-12-20 00:00:00'
            ],
            [
                'name'=>'Huawei',
                'image'=>'images/product05.png',
                'expire' => '2020-12-20 00:00:00'
            ],
            [
                'name'=>'Acer',
                'image'=>'images/product01.png',
                'expire' => '2020-12-20 00:00:00'
            ],
            [
                'name'=>'Xiaomi',
                'image'=>'images/product08.png',
                'expire' => '2020-12-20 00:00:00'
            ]
        ]);
    }
}
