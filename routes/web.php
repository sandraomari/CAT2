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

Route::get('/', function () 
{
    return view('Sandra_Omari.home');
});

Route::get('/fees', function ()
{
	return view('Sandra_Omari.fees');
});

Route::get('/student', function ()
{
	return view('Sandra_Omari.student');
});
Route::post('student','StudentController@Save');
Route::post('fees','FeesController@Save');
Route::get('viewall','FeesController@ViewAll');
Route::get('viewfees/fees','FeesController@Search');