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
    return view('welcome');
});

Auth::routes();

Route::prefix('/sales')->middleware('role:superadministrator|administrator')->group(function() {
    Route::get('/account', 'AccountController@index')->name('account.index');
    Route::resource('/account', 'AccountController', ['except' => 'destroy']);
});

Route::prefix('/manage')->middleware('role:superadministrator')->group(function() {
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
    Route::resource('/users', 'UserController');
});

Route::prefix('/profile')->middleware('role:superadministrator|administrator|dispatch|user')->group(function() {
    Route::get('/', 'ProfileController@index');
    Route::get('/dashboard', 'ProfileController@dashboard')->name('profile.dashboard');
    Route::resource('/users', 'ProfileController', ['except' => 'create|store|destroy']);
});

Route::prefix('/reservation')->middleware('role:superadministrator|administrator|dispatch|user')->group(function() {
    Route::get('/', 'PortalController@index');
    Route::resource('/portal', 'PortalController', ['except' => 'create|store|destroy']);
});

Route::get('/home', 'SchedulesController@index');
Route::get('/schedules/{schedule}', 'SchedulesController@show');
Route::get('/addreservation', 'SchedulesController@addReservation')->name('addreservation');