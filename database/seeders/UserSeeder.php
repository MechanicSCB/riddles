<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        clearDbTable('users');

        $users = [];

        for ($i = 1; $i <= 20; $i++) {
            $name = 'user' . sprintf("%03d", $i);
            $email = $name . '@example.com';
            $users[] = [
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($email),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }


        insertChunkedArrayToDb($users,'users');
    }
}
