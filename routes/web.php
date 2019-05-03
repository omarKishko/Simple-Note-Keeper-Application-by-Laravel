<?php

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

$router->pattern('id', '[0-9]+');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/newNote', 'HomeController@index')->name('newNote');
Route::get('/allNotes', 'HomeController@allNotes')->name('allNotes');
Route::post('note/add', 'HomeController@addNewNote');
Route::delete('note/delete/{id}', 'HomeController@deleteNote');