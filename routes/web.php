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

Route::get('/', ['as' => 'index', 'uses' => 'HomeCTRL@index']);
Route::get('/iletisim', ['as' => 'contact', 'uses' => 'HomeCTRL@contact']);
Route::get('/hizmetler', ['as' => 'services', 'uses' => 'HomeCTRL@services']);
Route::get('/hizmetler/{slug}', ['as' => 'service_detail', 'uses' => 'HomeCTRL@service_detail']);

Route::get('/kurumsal', ['as' => 'corporate', 'uses' => 'HomeCTRL@corporate']);
Route::get('/kurumsal/{slug}', ['as' => 'corporate_detail', 'uses' => 'HomeCTRL@corporate_detail']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
