<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Sticky_note_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('users')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10) ,
            'user_id' =>  1 ,
        ]);


    }
}
