<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@wonderful.com";
        $user->password = bcrypt('admin');
        $user->phone = '';
        $user->role = "admin";
        $user->save();

        $user = new User();
        $user->name = "Andree Benaya";
        $user->email = "abenbyy@wonderful.com";
        $user->password = bcrypt('asd123');
        $user->phone = '081226588077';
        $user->role = "user";
        $user->save();

        $user = new User();
        $user->name = "Anglie Yanto";
        $user->email = "crauzx@wonderful.com";
        $user->password = bcrypt('qwe123');
        $user->phone = '081226588072';
        $user->role = "user";
        $user->save();
    }
}
