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
Route::get('ajaxdata', 'AjaxdataController@index')->name('ajaxdata');
Route::get('edit/{id}', 'AjaxdataController@edit')->name('edit');
Route::get('delete/{id}', 'AjaxdataController@delete')->name('delete');
Route::get('ajaxdata/getdata', 'AjaxdataController@getdata')->name('ajaxdata.getdata');
