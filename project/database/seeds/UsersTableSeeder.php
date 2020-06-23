<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
                'role'=> false,
                'email' => 'alessiarossi@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('alessia1234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Francesco',
                'surname' => 'Di Giuseppe',
                'role'=> false,
                'email' => 'francesco@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('francesco555'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Giulia',
                'surname' => 'Bianchi',
                'role'=> false,
                'email' => 'giuliabianchi@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('giulia1234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Marta',
                'surname' => 'Di renzo',
                'role'=> false,
                'email' => 'marta@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('marta789'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Alessio',
                'surname' => 'Franchi',
                'role'=> false,
                'email' => 'alessio@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('ale43785'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Di Marco',
                'role'=> false,
                'email' => 'giovanni@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('giovanni1234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Admin',
                'surname' => 'Admin',
                'role'=> true,
                'email' => 'admin@material.com',
                'email_verified_at' => now(),
                'password' => Hash::make('secret'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
