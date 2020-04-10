<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shippings')->insert([
            [
                'status'=>'pending'
            ],
            [
                'status'=>'dispatched'
            ],
            [
                'status'=>'processed'
            ],
            [
                'status'=>'shipped'
            ],
            [
                'status'=>'delivered'
            ],
            [
                'status'=>'cancelled'
            ]
        ]);
    }
}
