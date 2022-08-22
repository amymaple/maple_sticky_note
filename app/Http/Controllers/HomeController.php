<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sticky_note;
use App\Models\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Make it so it is only the ones that are from the user 
        $sticky_notes = sticky_note::all();  
 
           
        return view('home')
            ->with("sticky_notes", $sticky_notes ) ; 
    }
}
