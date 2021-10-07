<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            "name"=>"uzair",
            "email"=>"iftikhar_uzair@yahoo.com",
            "password"=>Hash::make("reactjs56")
        ]);
    }
}
