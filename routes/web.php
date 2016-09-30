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

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['web']], function(){
	Route::resource('tests', 'TestController');
	Route::resource('sheets', 'SheetController');
	Route::resource('sheet_details', 'SheetDetailController');
	Route::resource('clients','ClientController');
	Route::resource('auth/profile', 'Auth\ProfileController');
  //Route::resource('dashboard','DashboardGraphic');
});


//Route
Route::get('search/autocomplete', 'SearchController@autocomplete');

Route::get('/pdf/handout/{id}', 'SheetController@handout_training');
Route::get('/tests/pdf/{id}', 'TestController@test_report');
Route::post('/tests/pdf/sendMail/', 'MailController@sendTestReport');
Route::get('tests/pdf/download/{id}', 'TestController@downloadPDF');

Route::post('tests/pdf/downloadhtml/', 'TestController@downloadHTMLtoPDF');

//Dashboard getData
Route::post('dashboard/graphic', 'DashboardGraphic@getData');



// usage inside a laravel route
Route::post('upload','Auth\ProfileController@update_avatar');

Route::get('edit/user/field/{name}','Auth\ProfileController@getPopEdit');

//Route::get('/basicemail/{id}', 'MailController@sendTestReport');
//Change user fields
Route::post('update/user/field/','Auth\ProfileController@updateField');


//Example
Route::get('pdf', 'PdfController@invoice');
