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
    return view('welcome');
});

Route::get('zarbon',"ZarbonController@controllpanel");
Route::get('zarbon/createPage',"ZarbonController@createPage");
Route::post('zarbon/create',"ZarbonController@create");
Route::get('zarbon/showForEdit',"ZarbonController@showForEdit");
Route::get('zarbon/editPage/{id}',"ZarbonController@editPage");
Route::post('zarbon/edit/{id}',"ZarbonController@edit");
Route::get('zarbon/deletePage',"ZarbonController@deletePage");
Route::get('zarbon/delete/{id}',"ZarbonController@delete");
Route::get('zarbon/list',"ZarbonController@list");
