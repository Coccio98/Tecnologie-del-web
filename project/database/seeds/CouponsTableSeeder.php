<?php

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupons') ->insert([
            [
                'code'=>'74A2E785',
                'discount'=>'50'
            ],[
                'code'=>'89C5T148',
                'discount'=>'20'
            ],[
                'code'=>'65S1L482',
                'discount'=>'20'
            ],[
                'code'=>'25D4V589',
                'discount'=>'10'
            ],[
                'code'=>'89W1C487',
                'discount'=>'10'
            ],[
                'code'=>'52F1H458',
                'discount'=>'10'
            ],[
                'code'=>'32G1B775',
                'discount'=>'30'
            ],[
                'code'=>'52A4R759',
                'discount'=>'50'
            ],[
                'code'=>'25F4L412',
                'discount'=>'50'
            ]
        ]);
    }
}
