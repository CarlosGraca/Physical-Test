<?php

Route::singularResourceParameters();


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
Route::get('password/reset','Auth\ResetPasswordController@reset');

Route::group(['middleware' => ['web']], function(){
	Route::resource('tests', 'TestController');
	Route::resource('sheets', 'SheetController');
	Route::resource('sheet_details', 'SheetDetailController');
	Route::resource('clients','ClientController');
	Route::resource('auth/profile', 'Auth\ProfileController');
  Route::resource('settings','SettingController');
});
Route::get('/handout/pdf/{id}', 'SheetController@handout_training');
Route::get('/sheet/edit/{id}', 'SheetController@setSheet');

//Route
Route::get('search/autocomplete', 'SearchController@autocomplete');


Route::get('/tests/pdf/{id}', 'TestController@test_report');

Route::post('/pdf/sendMail/', 'MailController@sendReport');

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

Route::get('exemple/exemple1',function(){
   $uri = Request::segment(1);
   echo($uri);
});
