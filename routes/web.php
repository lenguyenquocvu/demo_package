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
use App\district;

Route::get('/nhan-su', [
	'as' => 'ts',
	'uses' => 'nhansuController@index'
])->middleware('check');

use App\province;

Route::get('/tinh-thanh', [
	'as' => 'ts',
	'uses' => 'ProvincesController@provinces'
])->middleware('check');

use App\street;

Route::get('/duong', [
	'as' => 'ts',
	'uses' => 'ProvincesController@streets'
])->middleware('check');

Route::get('/phuong', [
	'as' => 'ts',
	'uses' => 'ProvincesController@wards'
])->middleware('check');

Route::get('/quan', [
	'as' => 'ts',
	'uses' => 'ProvincesController@districts'
])->middleware('check');

use App\page;

Route::get('/tuyen-sinh', [
	'as' => 'ts',
	'uses' => 'ProvincesController@provinces'
])->middleware('check');

// Route::get('/', function(){
// $pages = App\page::all();
// $names = App\page::find(2);
// foreach ($pages as $page) {
//     echo $page->page_title;
// }

// echo $names;
// });
Route::get('testbds',['as' => 'batdongsan', 'uses' => 'ProvincesController@provinces']);
Route::get('ajax', ['as' => 'ajax', 'uses' => 'AjaxController@getDistricts']);
Route::get('ajax_ward', ['as' => 'ajax_ward', 'uses' => 'AjaxController@getWards']);
Route::get('ajax_streets', ['as' => 'ajax_ward', 'uses' => 'AjaxController@getStreets']);
Route::get('/', function () {
    return view('welcome');
});

