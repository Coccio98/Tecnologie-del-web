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
                'image'=>'public/images/produt03.png',
                'expire' => '2020-12-20 00:00:00'
            ],
            [
                'name'=>'Samsung',
                'image' => 'public/images/product02.png',
                'expire' => '2020-12-20 00:00:00'
            ],
            [
                'name'=>'Huawei',
                'image'=>'public/images/product05.png',
                'expire' => '2020-12-20 00:00:00'
            ],
            [
                'name'=>'Acer',
                'image'=>'public/images/product01.png',
                'expire' => '2020-12-20 00:00:00'
            ],
            [
                'name'=>'Xiaomi',
                'image'=>'public/images/product08.png',
                'expire' => '2020-12-20 00:00:00'
            ]
        ]);
    }
}
