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
            'cost_approx_min' =>  1.0 ,
            'cost_approx_max' =>  5.0 ,
        ]);
        DB::table('items')->insert([ 
            'text' => 'Ruler' ,
            'sticky_note_id' =>  1 ,
        ]);
        DB::table('items')->insert([ 
            'text' => 'Dry wall' ,
            'sticky_note_id' =>  1 ,
            'cost_approx_min' =>  80.0 ,
            'cost_approx_max' =>  100.20 ,
        ]);
        /********************************/
        //List of every activity we need to do
        DB::table('items')->insert([ 
            'text' => 'Visit Vancouver' ,
            'sticky_note_id' =>  2 , 
        ]);
        DB::table('items')->insert([ 
            'text' => 'Dry wall' ,
            'sticky_note_id' =>  2 , 
        ]);
        /********************************/
        //Legal things to do 
        DB::table('items')->insert([ 
            'text' => 'Change name' ,
            'sticky_note_id' =>  3 , 
        ]); 
    }
}