<?php


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
// get request to show pages

Route::middleware(['auth'])->group(function(){
Route::get('/','GameController@index')->name('game.index');
Route::get('/create','GameController@create')->name('game.create');
Route::get('/edit/{game}','GameController@edit')->name('game.edit');
Route::get('/delete/{game}','GameController@delete')->name('game.delete');
// post request :: handle from submission 
Route::post('/create','GameController@handlecreate')->name('games.create');
Route::post('/edit/{game}','GameController@handleedit')->name('games.edit');
});