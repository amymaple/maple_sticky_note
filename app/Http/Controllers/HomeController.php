<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sticky_note;

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

        $sticky_notes = sticky_note::all();
        dd($sticky_notes);

        return view('home')
            ->with($sticky_notes ) ; 



    }
}
