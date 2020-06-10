<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            [
                //1
                'name'=> 'Smartphone',
                'category_id' =>'1'
            ],
            [
                //2
                'name'=> 'Mobile phone',
                'category_id' =>'1'
            ],
            [
                //3
                'name'=> 'Iphone',
                'category_id' =>'1'
            ],
            [
                //4
                'name'=> 'Laptop',
                'category_id' =>'2'
            ],
            [
                //5
                'name'=> 'PC Desktop',
                'category_id' =>'2'
            ],
            [
                //6
                'name'=> 'Mac',
                'category_id' =>'2'
            ],
            [
                //7
                'name'=> 'Printer',
                'category_id' =>'2'
            ],
            [
                //8
                'name'=> 'Camera',
                'category_id' =>'3'
            ],
            [
                //9
                'name'=> 'Video camera',
                'category_id' =>'3'
            ],
            [
                //10
                'name'=> 'TV',
                'category_id' =>'4'
            ],
            [
                //11
                'name'=> 'SmartTV',
                'category_id' =>'4'
            ],
            [
                //12
                'name'=> 'Hi-Fi',
                'category_id' =>'4'
            ],
            [
                //13
                'name'=> 'Headphone',
                'category_id' =>'5'
            ],
            [
                //14
                'name'=> 'Earphone',
                'category_id' =>'5'
            ],
            [
                //15
                'name'=> 'Power bank',
                'category_id' =>'5'
            ],
        ]);
    }
}
