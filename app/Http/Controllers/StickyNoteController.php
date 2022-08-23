<?php

namespace App\Http\Controllers;

use App\Models\sticky_note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StickyNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $user_id = Auth::user()->id; 
        $newStickyNote= sticky_note::create([
            'title' => $request->input("title"),
            'description' => $request->input("description"), 
            'user_id' => $user_id, 
        ]); 

        $newStickyNote->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sticky_note  $sticky_note
     * @return \Illuminate\Http\Response
     */
    public function show(sticky_note $sticky_note, Request $request )
    {
        $stickyNoteId = $request->input("stickyNoteId") ; 
        $sticky_note = sticky_note::find($stickyNoteId);     
        return view('sticky_note/show')
            ->with("sticky_note", $sticky_note )  ; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sticky_note  $sticky_note
     * @return \Illuminate\Http\Response
     */
    public function edit(sticky_note $sticky_note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sticky_note  $sticky_note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sticky_note $sticky_note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sticky_note  $sticky_note
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sticky_note::find($id)->delete($id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
