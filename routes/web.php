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

Route::get('/','Front\\HomeController@index')->name('front.home');
Route::get('files/{id}/preview','Front\\FileController@filePreview')->name('front.file.preview');
Route::get('files/{id}/download','Front\\FileController@fileDownload')->name('front.file.download');

//Front Desk Routes
Route::get('/frontdesk/attendance/get','AttendanceController@getAttendance');
Route::post('/frontdesk/attendance/find','AttendanceController@getAttendanceById');
Route::get('/frontdesk/attendance/dashboard','AttendanceController@getAttendanceDashboard');
Route::get('/frontdesk/attendance/registered','AttendanceController@getAttendanceRegistered');
Route::get('/frontdesk/attendance/attending','AttendanceController@getAttendanceAttending');

Auth::routes();

// NOTE:
// remove the demo middleware before you start on a project, this middleware if only
// for demo purpose to prevent viewers to modify data on a live demo site

// admin
Route::prefix('admin')->namespace('Admin')->middleware(['auth','demo'])->group(function()
{
    // single page
    Route::get('/', 'SinglePageController@displaySPA')->name('admin.spa');

    // resource routes
    Route::resource('users','UserController');
    Route::resource('groups','GroupController');
    Route::resource('permissions','PermissionController');
    Route::resource('files','FileController');
    Route::resource('file-groups','FileGroupController');
});