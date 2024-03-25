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

Route::get('/admin/archivio','App\Http\Controllers\AdminArchivioController@index')->name("admin.home.index");

Route::post('/admin/archivio/store','App\Http\Controllers\AdminArchivioController@store')->name('admin.archivio.store');

Route::delete('/admin/archivio/{id}/delete','App\Http\Controllers\AdminArchivioController@delete')->name('admin.archivio.delete');

Route::get('/admin/archivio/{id}/edit','App\Http\Controllers\AdminArchivioController@edit')->name('admin.archivio.edit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
