<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
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
            ]
        ]);
    }
}
