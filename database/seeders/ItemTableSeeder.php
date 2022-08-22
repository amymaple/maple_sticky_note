<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

        //Groceries
        DB::table('items')->insert([ 
            'text' => 'loofah sponge ' ,
            'sticky_note_id' =>  1 ,
        ]);

        DB::table('items')->insert([ 
            'text' => 'Ruler' ,
            'sticky_note_id' =>  1 ,
        ]);

        
        DB::table('items')->insert([ 
            'text' => 'Dry wall' ,
            'sticky_note_id' =>  1 ,
        ]);


    }
}
