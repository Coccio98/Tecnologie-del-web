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
                'image'=>'img/produt03.png'
            ],
            [
                'name'=>'Samsung',
                'image' => 'img/product02.png'
            ],
            [
                'name'=>'Huawei',
                'image'=>'img/product05.png'
            ],
            [
                'name'=>'Acer',
                'image'=>'img/product01.png'
            ],
            [
                'name'=>'Xiaomi',
                'image'=>'img/product08.png'
            ]
        ]);
    }
}
