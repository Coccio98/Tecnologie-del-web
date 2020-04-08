<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') ->insert([
            [
            'name' => 'Alessia',
            'surname' => 'Rossi',
            'email' => 'alessiarossi@gmail.com',
            'password' => bcrypt('alessia1234')
        ],
            [
                'name' => 'Francesco',
                'surname' => 'Di Giuseppe',
                'email' => 'francesco@gmail.com',
                'password' => bcrypt('francesco555')
            ],
            [
                'name' => 'Giulia',
                'surname' => 'Bianchi',
                'email' => 'giuliabianchi@gmail.com',
                'password' => bcrypt('giulia1234')
            ],
            [
                'name' => 'Marta',
                'surname' => 'Di renzo',
                'email' => 'marta@gmail.com',
                'password' => bcrypt('marta789')
            ],
            [
                'name' => 'Alessio',
                'surname' => 'Franchi',
                'email' => 'alessio@gmail.com',
                'password' => bcrypt('ale43785')
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Di Marco',
                'email' => 'giovanni@gmail.com',
                'password' => bcrypt('giovanni1234')
            ]
        ]);
    }
}
