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
Route::get('/helpdesk', 'ReportController@helpdesk');
Route::get('/sales', 'ReportController@sales');
Route::get('/picasso', 'ReportController@picasso');
Route::get('/deposit', 'ReportController@deposit');
Route::get('/banana', 'ReportController@banana');
Route::get('/contact', 'UserController@create');
Route::get('/tes2', 'EDCController@index');
Route::get('/reset-admin', 'ReportController@index');
Route::get('/tes', 'ReportController@index');
Route::get('/gallery', 'ReportController@gallery');
Route::get('/calendar', 'ReportController@calendar');
Route::get('/edc/json', 'EDCController@json');
Route::get('edc/show', 'EDCController@show');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('cashierdatatable', 'CashierController@datatable');
Route::resource('cashier', 'CashierController');
Route::get('cashier/destroy/{id}', 'CashierController@destroy');
Route::get('cashiermoredelete', 'CashierController@moredelete')->name('cashier.moredelete');

Route::get('edcdatatable', 'EDCController@datatable');
Route::resource('edc', 'EDCController');
Route::get('edc/destroy/{id}', 'EDCController@destroy');
Route::get('edcmoredelete', 'EDCController@moredelete')->name('edc.moredelete');

Route::get('posdatatable', 'POSController@datatable');
Route::resource('pos', 'POSController');
Route::get('pos/destroy/{id}', 'POSController@destroy');
Route::get('posmoredelete', 'POSController@moredelete')->name('pos.moredelete');

Route::get('counterdatatable', 'CounterController@datatable');
Route::resource('counter', 'CounterController');
Route::get('counter/destroy/{id}', 'CounterController@destroy');
Route::get('countersomedelete', 'CounterController@moredelete')->name('counter.moredelete');

Route::get('managementdatatable', 'ManagementController@datatable');
Route::resource('management', 'ManagementController');
Route::get('management/destroy/{id}', 'ManagementController@destroy');
Route::get('managementmoredelete', 'ManagementController@moredelete')->name('management.moredelete');

Route::get('scheduledatatable', 'ScheduleController@datatable');
Route::get('scheduleadd', 'ScheduleController@getBasic');
Route::get('schedule/datatablecreate', 'ScheduleController@datatablecreate')->name('schedule.datatablecreate');
Route::resource('schedule', 'ScheduleController');
Route::get('schedule/destroy/{id}', 'ScheduleController@destroy');
Route::get('scheduledatatable/destroy/{id}', 'ScheduleController@destroydatatable');
Route::post('schedule/day', 'ScheduleController@day');

Route::resource('monitoring', 'MonitoringController');
Route::get('monitoring/destroy/{id}', 'MonitoringController@destroy');

Route::resource('chronology', 'ActivityController');