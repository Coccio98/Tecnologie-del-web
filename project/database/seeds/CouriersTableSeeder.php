<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouriersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('couriers')->insert([
            [
                'name'=>'BRT'
            ],
            [
                'name'=>'SDA'
            ],
            [
                'name'=>'GLS'
            ],
            [
                'name'=>'FedeX'
            ],
            [
                'name'=>'TNT'
            ]
            ,
            [
                'name'=>'DHL'
            ],
            [
                'name'=>'UPS'
            ],
            [
                'name'=>'Poste Italiane'
            ]
        ]);
    }
}
