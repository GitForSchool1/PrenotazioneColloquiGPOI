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


//HOME ROUTE
Route::get('/','App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about','App\Http\Controllers\HomeController@about')->name("home.about");
//END HOME ROUTE

//ADMIN ROUTE
<<<<<<< HEAD
=======
<<<<<<< HEAD
Route::middleware("admin")->group(function(){

    Route::get('/admin','App\Http\Controllers\AdminController@index')->name("admin.home.index");
    Route::get('/admin/archivio','App\Http\Controllers\AdminArchivioController@store')->name('admin.archivio.store');
    Route::get('/admin/report','App\Http\Controllers\AdminController@show')->name('admin.report.show');
    Route::delete('/admin/archivio/{id}/delete','App\Http\Controllers\AdminArchivioController@delete')->name('admin.archivio.delete');
});

=======
>>>>>>> d7b7164bc2683e71f5d6e00df2c8e50d0bbc20ad
Route::get('/admin','App\Http\Controllers\AdminController@index')->name("admin.home.index"); //Funziona
Route::get('/admin/report','App\Http\Controllers\AdminController@show')->name('admin.report.show');
Route::post('/admin/archivio/store','App\Http\Controllers\AdminArchivioController@store')->name('admin.archivio.store');
Route::delete('/admin/archivio/{id}/delete','App\Http\Controllers\AdminArchivioController@delete')->name('admin.archivio.delete');
>>>>>>> daaf4248a8822398b74aed852c0335bc28503f5b
//END ADMIN ROUTE

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
