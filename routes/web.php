<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::get('admin/profile', 'UserController@index')->name('profile');
Route::get('admin/lockscreen', 'UserController@lockscreen')->name('lockscreen');
Route::get('admin/contact', 'UserController@create')->name('contact');

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('admin/gallery', 'HomeController@gallery')->name('gallery');
Route::get('admin/calendar', 'HomeController@calendar')->name('calendar');
Route::get('admin/banana', 'HomeController@banana')->name('banana');
Route::get('admin/helpdesk', 'HomeController@helpdesk')->name('helpdesk');
Route::get('admin/sales', 'HomeController@sales')->name('sales');
Route::get('admin/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('admin/cashierdatatable', 'CashierController@datatable')->name('cashier.datatable');
Route::resource('admin/cashier', 'CashierController');
Route::get('admin/superadmin', 'CashierController@index')->name('superadmin');
Route::get('admin/cashier/destroy/{id}', 'CashierController@destroy');
Route::get('admin/cashiermoredelete', 'CashierController@moredelete')->name('cashier.moredelete');

Route::get('admin/managementdatatable', 'ManagementController@datatable')->name('management.datatable');
Route::resource('admin/management', 'ManagementController');
Route::get('admin/management/destroy/{id}', 'ManagementController@destroy');
Route::get('admin/managementmoredelete', 'ManagementController@moredelete')->name('management.moredelete');

Route::get('admin/edcdatatable', 'EDCController@datatable')->name('edc.datatable');
Route::resource('admin/edc', 'EDCController');
Route::get('admin/edc/destroy/{id}', 'EDCController@destroy');
Route::get('admin/edcmoredelete', 'EDCController@moredelete')->name('edc.moredelete');

Route::get('admin/posdatatable', 'POSController@datatable')->name('pos.datatable');
Route::resource('admin/pos', 'POSController');
Route::get('admin/pos/destroy/{id}', 'POSController@destroy');
Route::get('admin/posmoredelete', 'POSController@moredelete')->name('pos.moredelete');

Route::get('admin/counterdatatable', 'CounterController@datatable')->name('counter.datatable');
Route::resource('admin/counter', 'CounterController');
Route::get('admin/counter/destroy/{id}', 'CounterController@destroy');
Route::get('admin/countersomedelete', 'CounterController@moredelete')->name('counter.moredelete');

Route::get('admin/scheduledatatable', 'ScheduleController@datatable')->name('schedule.datatable');
Route::get('admin/scheduleadd', 'ScheduleController@getBasic');
Route::get('admin/schedule/datatablecreate', 'ScheduleController@datatablecreate')->name('schedule.datatablecreate');
Route::resource('admin/schedule', 'ScheduleController');
Route::get('admin/schedule/destroy/{id}', 'ScheduleController@destroy');
Route::get('admin/scheduledatatable/destroy/{id}', 'ScheduleController@destroydatatable');
Route::post('admin/schedule/day', 'ScheduleController@day');

Route::resource('admin/workinghour', 'WorkingHourController');

Route::resource('admin/monitoring', 'MonitoringController');
Route::get('admin/monitoring/destroy/{id}', 'MonitoringController@destroy');

Route::resource('admin/chronology', 'ActivityController');
Route::get('admin/reminder', 'ActivityController@reminder')->name('reminder');
Route::get('admin/performance', 'ActivityController@performance')->name('performance');
Route::get('admin/pratice', 'ActivityController@pratice')->name('pratice');
Route::get('admin/question', 'ActivityController@question')->name('question');
Route::get('admin/score', 'ActivityController@score')->name('score');
Route::get('admin/training', 'ActivityController@training')->name('training.index');
Route::get('admin/elearning', 'ActivityController@elearning')->name('elearning.index');

Route::resource('admin/consolidate', 'ConsolidateController');
Route::get('admin/deposit', 'ConsolidateController@deposit')->name('consolidate.deposit');
Route::get('admin/banana', 'ConsolidateController@banana')->name('consolidate.banana');

Route::resource('admin/report', 'ReportController');