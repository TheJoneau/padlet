<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Max',
            'lastname' => 'Mustermann',
            'email' => 'max@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'firstname' => 'Marie',
            'lastname' => 'Müller',
            'email' => 'marie@gmail.com',
            'password' => bcrypt('password1'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'firstname' => 'Tom',
            'lastname' => 'Reiter',
            'email' => 'tom@gmail.com',
            'password' => bcrypt('password2'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'firstname' => 'Lukas',
            'lastname' => 'Reiter',
            'email' => 'lukas@gmail.com',
            'password' => bcrypt('password3'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'firstname' => 'Martin',
            'lastname' => 'Groß',
            'email' => 'martin@gmail.com',
            'password' => bcrypt('password4'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'firstname' => 'Sarah',
            'lastname' => 'Bauer',
            'email' => 'sarah@gmail.com',
            'password' => bcrypt('password5'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
