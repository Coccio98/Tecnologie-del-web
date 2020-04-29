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
                'amount'=>'50',
                'expiry_date'=>'2020-12-31'
            ],[
                'code'=>'89C5T148',
                'amount'=>'20',
                'expiry_date'=>'2020-12-31'
            ],[
                'code'=>'65S1L482',
                'amount'=>'20',
                'expiry_date'=>'2020-12-31'
            ],[
                'code'=>'25D4V589',
                'amount'=>'10',
                'expiry_date'=>'2020-12-31'
            ],[
                'code'=>'89W1C487',
                'amount'=>'10',
                'expiry_date'=>'2020-12-31'
            ],[
                'code'=>'52F1H458',
                'amount'=>'10',
                'expiry_date'=>'2020-12-31'
            ],[
                'code'=>'32G1B775',
                'amount'=>'30',
                'expiry_date'=>'2020-12-31'
            ],[
                'code'=>'52A4R759',
                'amount'=>'50',
                'expiry_date'=>'2020-12-31'
            ],[
                'code'=>'25F4L412',
                'amount'=>'50',
                'expiry_date'=>'2020-12-31'
            ]
        ]);
    }
}
