<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['web']], function(){
	Route::resource('tests', 'TestController');
	Route::resource('sheets', 'SheetController');
	Route::resource('sheet_details', 'SheetDetailController');
	Route::resource('clients','ClientController');
});


//Route
Route::get('search/autocomplete', 'SearchController@autocomplete');

Route::get('/pdf/handout/{id}', 'SheetController@handout_training');

