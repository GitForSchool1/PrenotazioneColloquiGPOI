<?php
use Illuminate\Support\Facades\Route;
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

Route::get('/','App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/about','App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/products.index','App\Http\Controllers\ProductsController@index')->name("products.index");

Route::get('/products/{id}','App\Http\Controllers\ProductsController@show')->name("products.show");

Route::get('/admin','App\Http\Controllers\AdminController@index')->name("admin.home.index");

Route::get('/admin/products','App\Http\Controllers\AdminProductController@index')->name("admin.home.index");

Route::post('/admin/products/store','App\Http\Controllers\AdminProductController@store')->name('admin.products.store');

Route::delete('/admin/products/{id}/delete','App\Http\Controllers\AdminProductController@delete')->name('admin.products.delete');

Route::get('/admin/products/{id}/edit','App\Http\Controllers\AdminProductController@edit')->name('admin.products.edit');
