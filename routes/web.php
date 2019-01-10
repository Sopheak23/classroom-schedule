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

Route::get('template', function () {
    return view('template');
});

Route::get('buildingA', function () {
    return view('buildingA');
});

Route::get('roomA1', 'TestController@index');

Route::get('switchView', function () {
    return view('switchView');
});

Route::get('professorInput', function () {
    return view('professorInput');
});

Route::get('test', function () {
    return view('test');
});

Route::get('new', function () {
    return view('new');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
