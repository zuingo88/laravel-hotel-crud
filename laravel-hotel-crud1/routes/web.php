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

//home
Route::get('/', 'employeeController@home')->name('home');

//employee
Route::get('/employee{id}', 'employeeController@employee')->name('employee');

//destroy
Route::get('destroy/{id}', 'employeeController@destroy')->name('destroy');

//edit
Route::get('edit/employee/{id}', 'employeeController@edit')->name('edit');

//update
Route::post('update/employee/{id}', 'employeeController@update')->name('update');
