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
        DB::table('sticky_notes')->insert([
            'title' => 'Groceries to buy',
            'description' => 'List of everything we need to buy at the grocery store (No frills or Save on Foods)' ,
            'user_id' =>  1 ,
        ]);

        
        DB::table('sticky_notes')->insert([
            'title' => 'Activities to do',
            'description' => 'List of every activity we need to do' ,
            'user_id' =>  1 ,
        ]);

        
        DB::table('sticky_notes')->insert([
            'title' => 'Important reminders',
            'description' => 'Everything that is legal and more' ,
            'user_id' =>  1 ,
        ]);

    }
}
