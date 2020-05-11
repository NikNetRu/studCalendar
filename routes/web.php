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

Route::get('/', function () {
    return view('layouts.login');
});

Route::post('calendar', 'CalendarController@makeNewCalendar')->name('MakeNewCalendar');

Route::get('calendar/{name}', 'CalendarController@getCalendarbyName')->name('getCalendarbyName');
Route::get('calendar/{name}/getTasksbyName', 'CalendarController@getTasksbyName')->name('getTasksbyName');