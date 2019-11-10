<?php

use App\User;
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
        User::create([
            'name' => 'Benyoucef Mansour',
            'email' => 'benyoudev@gmail.com',
            'password' => bcrypt('cicada3301'),
        ]);
    }
}
