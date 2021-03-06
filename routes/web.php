<?php
/*
|--------------------------------------------------------------------------
| ADMIN Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('admin.index');
});


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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('autocomplete', 'AjaxAutocompleteController@index');
Route::get('searchajax', ['as'=>'searchajax','uses'=>'AjaxAutocompleteController@searchResponse']);
Route::get('/pagination/fetch_data', 'AjaxAutocompleteController@fetch_data');
Route::resource('ajax-crud', 'AjaxController');
Route::get('filter_data', 'AjaxAutocompleteController@filter_data');
Route::get('filter_data_ind', 'AjaxAutocompleteController@filter_data_ind');