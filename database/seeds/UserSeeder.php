<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('users')->get()->count() == 0){
            DB::table('users')->insert([
                [
                    'name' => 'Zidan Indratama',
                    'email' => 'zidanindratama@gmail.com',
                    'role' => 'Administrator',
                    'password' => Hash::make('zidanindratama@gmail.com'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Author',
                    'email' => 'author@gmail.com',
                    'role' => 'Author',
                    'password' => Hash::make('author@gmail.com'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Pengunjung',
                    'email' => 'pengunjung@gmail.com',
                    'role' => 'Pengunjung',
                    'password' => Hash::make('pengunjung@gmail.com'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
