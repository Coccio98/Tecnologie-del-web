<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name'=>'Sony'
            ],
            [
                'name'=>'Samsung'
            ],
            [
                'name'=>'Huawei'
            ],
            [
                'name'=>'Acer'
            ],
            [
                'name'=>'Xiaomi'
            ],
            [
                'name'=>'Apple'
            ],
            [
                'name'=>'Airo'
            ],
            [
                'name'=>'Canon'
            ],
            [
                'name'=>'Nikon'
            ],
            [
                'name'=>'Majestic'
            ],
            [
                'name'=>'LG'
            ]
        ]);
    }
}
