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

Route::get('/', function () {return view('welcome');});
Route::get('/coba', function () {return view('login3');});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'UserController@index');
Route::get('/lockscreen', 'ReportController@lockscreen');
Route::get('/contact', 'UserController@create');
Route::get('/tes2', 'EDCController@index');
Route::get('/reset-admin', 'ReportController@index');
Route::get('/tes', 'ReportController@index');
Route::get('/gallery', 'ReportController@gallery');
Route::get('/calendar', 'ReportController@calendar');
Route::get('/monitoring', 'ReportController@monitoring');
Route::get('/edc/json', 'EDCController@json');
Route::get('edc/show', 'EDCController@show');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('cashiertable', 'CashierController@table');
Route::resource('cashier', 'CashierController');
Route::get('cashier/destroy/{id}', 'CashierController@destroy');

Route::get('edctable', 'EDCController@table');
Route::resource('edc', 'EDCController');
Route::get('edc/destroy/{id}', 'EDCController@destroy');

Route::get('postable', 'POSController@table');
Route::resource('pos', 'POSController');
Route::get('pos/destroy/{id}', 'POSController@destroy');

Route::get('countertable', 'CounterController@table');
Route::resource('counter', 'CounterController');
Route::get('counter/destroy/{id}', 'CounterController@destroy');

Route::get('managementtable', 'ManagementController@table');
Route::resource('management', 'ManagementController');
Route::get('management/destroy/{id}', 'ManagementController@destroy');

Route::get('scheduletable', 'ScheduleController@table');
Route::resource('schedule', 'ScheduleController');
Route::get('schedule/destroy/{id}', 'ScheduleController@destroy');