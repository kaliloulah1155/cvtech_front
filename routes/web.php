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
 //formulaire de creation
 Route::get('/cv','CreatedController@index')->name('index');
 Route::post('/cv','CreatedController@store')->name('store');

//formulaire de recherche
// Route::get('/cv/ngsys_front/cvsearch','SearchController@index')->name('cvsearch');
 Route::get('/cvsearch','SearchController@index')->name('cvsearch');
 Route::post('/listsearch','SearchController@list_cv')->name('listsearch');



 