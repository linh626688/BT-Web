<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

Route::group(['middleware' => ['web']], function () {
    //
});
Route::resource('/', 'IndexController');
Route::resource('search', 'SearchController');
Route::resource('/login', 'LoginController@login');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/form', ['as' => 'admin.form', 'uses' => "FormController@index"]);
    Route::resource('year', 'YearController');
    Route::resource('season', 'SeasonController');
    Route::resource('class', 'ClassRoomController');
    Route::resource('subject', 'SubjectController');

    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::get('/table', ['as' => 'admin.table', 'uses' => "TableController@index"]);

});
Route::get('admin', 'AdminController@index');
