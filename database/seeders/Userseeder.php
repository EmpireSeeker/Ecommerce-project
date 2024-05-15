<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       // DB::table('users')->insert([
           // "name"=>"admin",
           // "email"=>"admin@gmail.com",
          //  "role"=>"admin",
           // "password"=>bcrypt("1234567")
       // ]);

        DB::table('users')->insert([
        "name"=>"admin1",
        "email"=>"1admin@gmail.com",
        "role"=>"admin",
        "password"=>bcrypt("1234567")
    ]);
}
    }
