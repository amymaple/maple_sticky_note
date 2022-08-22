<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/storeStickyNote', [App\Http\Controllers\StickyNoteController::class, 'store'] )->name("sticky_note_store");
Route::delete('/deleteStickyNote/{id}', [App\Http\Controllers\StickyNoteController::class, 'destroy'])->name('sticky_note_delete');

