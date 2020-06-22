<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boxes')->insert([
            [
                'image'=>'images/shop01.png',
                'category_id' =>'2',
            ],
            [
                'image'=>'images/shop03.png',
                'category_id' =>'5',
            ],
            [
                'image'=>'images/shop02.png',
                'category_id' =>'3',
            ]
        ]);
    }
}
