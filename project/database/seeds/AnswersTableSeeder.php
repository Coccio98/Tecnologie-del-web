<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers') ->insert([
            [
                'text' => 'Yes',
                'user_id' => '4',
                'question_id' => '1'
            ],
            [
                'text' => 'No',
                'user_id' => '1',
                'question_id' => '2'
            ],
            [
                'text' => 'Up to 10 fingerprints',
                'user_id' => '6',
                'question_id' => '3'
            ],
            [
                'text' => 'The notebook is prepared to install to the Office package, but is not pre-installed.',
                'user_id' => '2',
                'question_id' => '4'
            ],
            [
                'text' => 'The PC has pre-installed the PC manager and basic Windows applications.',
                'user_id' => '6',
                'question_id' => '5'
            ],
            [
                'text' => 'Yes',
                'user_id' => '3',
                'question_id' => '6'
            ],
            [
                'text' => '3 USB ports, including a 3.0 and two 2.0',
                'user_id' => '4',
                'question_id' => '7'
            ],
            [
                'text' => 'Yes,you have the quick charge that lasts about an hour and a half',
                'user_id' => '5',
                'question_id' => '8'
            ]
        ]);
    }
}
