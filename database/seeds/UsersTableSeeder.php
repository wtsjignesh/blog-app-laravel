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
        User::truncate();

        User::create([
            'name'     => 'Jignesh UpWork',
            'email'    => 'mesvaniya.jignesh2141@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}
