<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('tags')->get()->count() == 0){
            DB::table('tags')->insert([
                [
                    'name' => 'E-sport',
                    'slug' => 'e-sport',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Sepak Bola',
                    'slug' => 'sepak-bola',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => '#malamjumat',
                    'slug' => '#malamjumat',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Bencana alam',
                    'slug' => 'bencana-alam',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Tips and Trick',
                    'slug' => 'tips-and-trick',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
