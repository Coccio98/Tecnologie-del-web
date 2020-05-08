<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'name'=>'Laptop'
            ],
            [
                'name'=>'Smartphone'
            ],
            [
                'name'=>'Headphone'
            ],
            [
                'name'=>'Earphone'
            ],
            [
                'name'=>'Camera'
            ],
            [
                'name'=>'Accessory'
            ]
        ]);
    }
}
