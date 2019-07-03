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
Route::get('/hizmetler', ['as' => 'services', 'uses' => 'HomeCTRL@services']);
Route::get('/hizmetler/{slug}', ['as' => 'service_detail', 'uses' => 'HomeCTRL@service_detail']);

Route::get('/blog', ['as' => 'blogs', 'uses' => 'HomeCTRL@blogs']);
Route::get('/blog/{slug}', ['as' => 'blog_detail', 'uses' => 'HomeCTRL@blog_detail']);

Route::get('/calisma', ['as' => 'works', 'uses' => 'HomeCTRL@works']);
Route::get('/calisma/{slug}', ['as' => 'work_detail', 'uses' => 'HomeCTRL@work_detail']);

Route::get('/urunler', ['as' => 'products', 'uses' => 'HomeCTRL@products']);
Route::get('/urunler/{category}', ['as' => 'products_category', 'uses' => 'HomeCTRL@products_category']);
Route::get('/urunler/{category}/{slug}', ['as' => 'product_detail', 'uses' => 'HomeCTRL@product_detail']);

Route::get('/kurumsal', ['as' => 'corporate', 'uses' => 'HomeCTRL@corporate']);
Route::get('/kurumsal/{slug}', ['as' => 'corporate_detail', 'uses' => 'HomeCTRL@corporate_detail']);

Route::get('/iletisim', ['as' => 'contact', 'uses' => 'HomeCTRL@contact']);
Route::post('/iletisim', ['as' => 'contact_post', 'uses' => 'HomeCTRL@contact_post']);

Route::post('/arama', ['as' => 'search_post', 'uses' => 'HomeCTRL@search_post']);

Route::get('/insan_kaynaklari', ['as' => 'human_resources', 'uses' => 'HomeCTRL@human_resources']);
Route::post('/insan_kaynaklari', ['as' => 'human_resources_post', 'uses' => 'HomeCTRL@human_resources_post']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
