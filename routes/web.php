<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/decorator', 'DecoratorController@index');

Route::get('/adapter', 'AdapterController@index');

Route::get('/template', 'TemplateController@index');

Route::get('/strategy', 'StrategyController@index');

Route::group(['prefix' => 'react'], function () {
    Route::get('bootstrap-component', 'React\BootstrapComponentController@index');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
