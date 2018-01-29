<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $code = str_random(10);
        
        $token = Password::getRepository()->createNewToken();
        $senha = Password::getRepository()->createNewTokenKey();

        DB::table('galleries')->insert([
            ['name' => 'Administrador do Sistema', 'username' => 'admin','email' => 'darioajr@gmail.com','password' => 'Hering1880'],
            ['name' => 'Usuário 1', 'username' => 'user1','email' => 'darioajr@gmail.com','password' => Password::getRepository()->createNewTokenKey()],
            ['name' => 'Usuário 2', 'username' => 'user2','email' => 'darioajr@gmail.com','password' => Password::getRepository()->createNewTokenKey()],
        ]);
    }
}