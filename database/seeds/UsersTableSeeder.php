<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Adicionando um usuário padrão
        User::create([
            'name' => 'JU PROSIDER',
            'email' => 'jucilenesousa97@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
