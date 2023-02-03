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


Auth::routes();

Route::group(['middleware' => ['guest']], function () {

    Route::get('/', function () {
        return view('auth.login');
    });

});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' , 'auth' ]
    ], function(){ 
        
     //==============================dashboard============================
     Route::get('/dashboard', 'HomeController@index')->name('dashboard');
     Route::resource('Grades', 'GradeController');
     Route::delete('grads_delete_all', 'GradeController@grads_delete_all')->name('grads_delete_all');
     Route::post('/Grades/search','GradeController@search')->name('Grades.search');


        

    });
Route::get('/home', 'HomeController@index')->name('home');
