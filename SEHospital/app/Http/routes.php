<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@getIndex');


Route::get('appointment','AppointmentController@getIndex');
Route::get('appointment/time','AppointmentController@getPageTime');
Route::get('doctorList', 'AppointmentController@getDoctorList');


Route::get('register','HomeController@getRegister');
Route::post('/','HomeController@postRegister');


Route::get('login','HomeController@getLogin');

Route::get('schedule','DoctorController@index');

Route::get('test','TestSomethingController@getIndex');
Route::post('justposttest','TestSomethingController@postTest');