<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Administrador do Sistema', 'email' => 'darioajr@gmail.com','password' => Hash::make('123456')],
            ['name' => 'Usuário 1', 'email' => 'darioajr1@gmail.com','password' => Hash::make('123456')],
            ['name' => 'Usuário 2', 'email' => 'darioajr2@gmail.com','password' => Hash::make('123456')],
        ]);
    }
}