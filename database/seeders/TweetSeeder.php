<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweets')->insert([
           ['user_id'=>1, 'body'=>"this is the tweet body. tweet tweety 1"],
           ['user_id'=>1, 'body'=>"this is the tweet body. tweet tweety 2"],
           ['user_id'=>1, 'body'=>"this is the tweet body. tweet tweety 3"],
        ]);
    }
}
