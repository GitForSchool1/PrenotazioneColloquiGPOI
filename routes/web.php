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
Route::middleware("admin")->group(function(){

    Route::get('/admin','App\Http\Controllers\AdminController@index')->name("admin.home.index");
    Route::get('/admin/archivio','App\Http\Controllers\AdminArchivioController@store')->name('admin.archivio.store');
    Route::get('/admin/report','App\Http\Controllers\AdminReportController@show')->name('admin.report.show');
    Route::delete('/admin/archivio/{id}/delete','App\Http\Controllers\AdminArchivioController@delete')->name('admin.archivio.delete');
    Route::get('/admin/gestore/users','App\Http\Controllers\AdminGestoreController@index')->name('admin.gestore.users');
    Route::get('/admin/gestore/{id}/edit','App\Http\Controllers\AdminGestoreController@edit')->name('admin.gestore.edit');
    Route::put('/admin/gestore/{id}/update','App\Http\Controllers\AdminGestoreController@update')->name('admin.gestore.update');
    
});

Route::middleware("professore")->group(function(){
    /*
        Upload per i file  -> post
        Upload degli Orari -> post
    */
});


//END ADMIN ROUTE

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home','App\Http\Controllers\HomeController@calendar')->name("home.calendar");

