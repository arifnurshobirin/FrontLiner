<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {return view('welcome');});

Auth::routes(['verify' => true]);

Route::get('/admin', 'HomeController@index')->name('admin');


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('profile', 'UserController@index')->name('profile');
    Route::get('lockscreen', 'UserController@lockscreen')->name('lockscreen');
    Route::get('contact', 'UserController@create')->name('contact');
    Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('gallery', 'HomeController@gallery')->name('gallery');
    Route::get('calendar', 'HomeController@calendar')->name('calendar');
    Route::get('banana', 'HomeController@banana')->name('banana');
    Route::get('helpdesk', 'HomeController@helpdesk')->name('helpdesk');
    Route::get('sales', 'HomeController@sales')->name('sales');
    Route::get('mailbox', 'HomeController@mailbox')->name('mailbox');
    Route::get('compose', 'HomeController@compose')->name('compose');
    Route::get('readmail', 'HomeController@readmail')->name('readmail');
    Route::get('error', 'HomeController@error')->name('error');


    Route::get('cashierdatatable', 'CashierController@datatable')->name('cashier.datatable');
    Route::resource('cashier', 'CashierController');
    Route::get('superadmin', 'CashierController@index')->name('superadmin');
    Route::get('cashiermoredelete', 'CashierController@moredelete')->name('cashier.moredelete');

    Route::get('managementdatatable', 'ManagementController@datatable')->name('management.datatable');
    Route::resource('management', 'ManagementController');
    Route::get('managementmoredelete', 'ManagementController@moredelete')->name('management.moredelete');

    Route::get('edc/yajra', 'EDCController@yajra')->name('edc.yajra');
    Route::resource('edc', 'EDCController');
    Route::get('edcdatatable', 'EDCController@datatable')->name('edc.datatable');
    
    Route::get('edcmoredelete', 'EDCController@moredelete')->name('edc.moredelete');

    Route::get('computerdatatable', 'ComputerController@datatable')->name('computer.datatable');
    Route::resource('computer', 'ComputerController');
    Route::get('computermoredelete', 'ComputerController@moredelete')->name('computer.moredelete');

    Route::get('counterdatatable', 'CounterController@datatable')->name('counter.datatable');
    Route::resource('counter', 'CounterController');
    Route::get('countersomedelete', 'CounterController@moredelete')->name('counter.moredelete');

    Route::get('scheduledatatable', 'ScheduleController@datatable')->name('schedule.datatable');
    Route::get('scheduleadd', 'ScheduleController@getBasic');
    Route::get('schedule/datatablecreate', 'ScheduleController@datatablecreate')->name('schedule.datatablecreate');
    Route::resource('schedule', 'ScheduleController');
    Route::get('scheduledatatable/destroy/{id}', 'ScheduleController@destroydatatable');
    Route::post('schedule/day', 'ScheduleController@day');

    Route::resource('workinghour', 'WorkingHourController');

    Route::resource('monitoring', 'MonitoringController');
    Route::get('monitoring/destroy/{id}', 'MonitoringController@destroy');

    Route::resource('chronology', 'ActivityController');
    Route::get('reminder', 'ActivityController@reminder')->name('reminder');
    Route::get('performance', 'ActivityController@performance')->name('performance');
    Route::get('pratice', 'ActivityController@pratice')->name('pratice');
    Route::get('question', 'ActivityController@question')->name('question');
    Route::get('score', 'ActivityController@score')->name('score');
    Route::get('training', 'ActivityController@training')->name('training.index');
    Route::get('elearning', 'ActivityController@elearning')->name('elearning.index');

    Route::resource('consolidate', 'ConsolidateController');
    Route::get('deposit', 'ConsolidateController@deposit')->name('consolidate.deposit');
    Route::get('consolidatedatatable', 'ConsolidateController@datatable')->name('consolidate.datatable');
    Route::get('banana', 'ConsolidateController@banana')->name('consolidate.banana');

    Route::resource('report', 'ReportController');

});


