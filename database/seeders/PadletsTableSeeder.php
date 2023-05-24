<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class PadletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$userIDs = DB::table('users')->pluck('id');
        //foreach ($userIDs as $value) {}

        DB::table('padlets')->insert([
            'title' => 'The Best Recipes',
            'is_public' => true,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'creator_id' => 20
        ]);

        DB::table('padlets')->insert([
            'title' => 'Travel Destinations',
            'is_public' => true,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'creator_id' => 25
        ]);

        DB::table('padlets')->insert([
            'title' => 'World of Photography',
            'is_public' => true,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'creator_id' => 20
        ]);

        DB::table('padlets')->insert([
            'title' => 'Creative Ideas for DIY Projects',
            'is_public' => true,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'creator_id' => 20
        ]);

        DB::table('padlets')->insert([
            'title' => 'Successful Time Management',
            'is_public' => true,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'creator_id' => 21
        ]);

        DB::table('padlets')->insert([
            'title' => 'Career Tips',
            'is_public' => true,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'creator_id' => 24
        ]);

        DB::table('padlets')->insert([
            'title' => 'The Latest Tech Trends',
            'is_public' => true,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'creator_id' => 22
        ]);

        DB::table('padlets')->insert([
            'title' => 'Facts about the Animals',
            'is_public' => true,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'creator_id' => 23
        ]);

        DB::table('padlets')->insert([
            'title' => 'Sustainable Living',
            'is_public' => true,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'creator_id' => 20
        ]);
    }

}
