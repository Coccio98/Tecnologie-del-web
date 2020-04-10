<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions') ->insert([
            [
                'text' => 'Are these headphones compatible with any smartphone?',
                'user_id' => '1',
                'product_id' => '1'
            ],
            [
                'text' => 'Does the cable have a volume controller?',
                'user_id' => '3',
                'product_id' => '1'
            ],
            [
                'text' => 'Is it possible to register two fingerprints?',
                'user_id' => '4',
                'product_id' => '2'
            ],
            [
                'text' => 'Are office services already installed?',
                'user_id' => '5',
                'product_id' => '2'
            ],
            [
                'text' => 'Which applications are pre-installed?',
                'user_id' => '1',
                'product_id' => '2'
            ],
            [
                'text' => 'Is it possible to have a tax bill?',
                'user_id' => '5',
                'product_id' => '4'
            ],
            [
                'text' => 'how many USB sockets does the PC have?',
                'user_id' => '2',
                'product_id' => '4'
            ],
            [
                'text' => 'Has the charger with the quick charge?',
                'user_id' => '3',
                'product_id' => '5'
            ]
        ]);
    }
}
