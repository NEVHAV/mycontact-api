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

Route::get('/', function () {
    return view('view');
});

Route::get('home', function() {
	return view('view');
});

// Route::get('show', 'MyController@getShow');
// Route::get('new', 'MyController@getNew')
// ->name('new');
// Route::get('search', 'MyController@getSearch');
// Route::post('resultSearch', 'MyController@postResultSearch');
// Route::post('new', 'MyController@postNew');
// Route::get('delete', 'MyController@getDelete')
// ->name('delete');
// Route::post('delete/{id}', 'MyController@postDelete');

Route::get('show', function() {
	return view('show');
});

//Route AngularJS
Route::get('/public/contacts/{id?}', 'Contacts@index');
Route::post('/public/contacts', 'Contacts@store');
Route::put('/public/contacts/{id}', 'Contacts@update');
Route::delete('/public/contacts/{id}', 'Contacts@delete');

//Route JWT
Route::get('log', 'AuthenticateController@getLog')
->name('log');
Route::post('log', 'AuthenticateController@postLog');
Route::get('new', 'AuthenticateController@getNew')
->name('new');
Route::post('new', 'AuthenticateController@postNew');