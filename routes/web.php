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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/', function () {
        return view('welcome');
    });

    Route::prefix('management_user')->group(function () {
        Route::get('/', ['as' => 'user_index', 'uses' => 'WebController@user_index']);
        Route::post('store_user', ['as' => 'store_user', 'uses' => 'WebController@store_user']);
        Route::put('update_user', ['as' => 'update_user', 'uses' => 'WebController@update_user']);
        Route::post('get_users', ['as' => 'get_users', 'uses' => 'WebController@get_users']);
        Route::post('get_user', ['as' => 'get_user', 'uses' => 'WebController@get_user']);
        Route::delete('user_delete', ['as' => 'user_delete', 'uses' => 'WebController@user_delete']);

    });

    Route::prefix('management_director')->group(function () {
        Route::get('/', ['as' => 'director_index', 'uses' => 'WebController@director_index']);
        Route::post('director_store',['as' => 'director_store', 'uses' => 'WebController@director_store']);
        Route::put('update_director', ['as' => 'update_director', 'uses' => 'WebController@update_director']);
        Route::put('update_director_delete', ['as' => 'update_director_delete', 'uses' => 'WebController@update_director_delete']);
        Route::post('get_directors', ['as' => 'get_directors', 'uses' => 'WebController@get_directors']);
        Route::post('get_directors_delete', ['as' => 'get_directors_delete', 'uses' => 'WebController@get_directors_delete']);
        Route::post('get_director', ['as' => 'get_director', 'uses' => 'WebController@get_director']);
        Route::delete('director_delete', ['as' => 'director_delete', 'uses' => 'WebController@director_delete']);

    });

    Route::prefix('management_patient')->group(function () {
        Route::get('/', ['as' => 'patient_index', 'uses' => 'WebController@patient_index']);
        Route::post('patient_store',['as' => 'patient_store', 'uses' => 'WebController@patient_store']);
        Route::put('update_patient', ['as' => 'update_patient', 'uses' => 'WebController@update_patient']);
        Route::put('update_patient_delete', ['as' => 'update_patient_delete', 'uses' => 'WebController@update_patient_delete']);
        Route::post('get_patients', ['as' => 'get_patients', 'uses' => 'WebController@get_patients']);
        Route::post('get_patients_delete', ['as' => 'get_patients_delete', 'uses' => 'WebController@get_patients_delete']);
        Route::post('get_patient', ['as' => 'get_patient', 'uses' => 'WebController@get_patient']);
        Route::delete('patient_delete', ['as' => 'patient_delete', 'uses' => 'WebController@patient_delete']);

    });


});






