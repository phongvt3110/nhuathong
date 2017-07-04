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

Route::get('/', 'Frontend\HomeController@index');

Route::get('/backend','Backend\AdminController@index');
Route::get('/backend/basic-table','Backend\AdminController@basic_table');
Route::get('/backend/blank','Backend\AdminController@blank');
Route::get('/backend/buttons','Backend\AdminController@buttons');
Route::get('/backend/chart-chartjs','Backend\AdminController@chart_chartjs');
Route::get('/backend/404','Backend\AdminController@error404');
Route::get('/backend/form-component','Backend\AdminController@form_component');
Route::get('/backend/form-validation','Backend\AdminController@form_validation');
Route::get('/backend/general','Backend\AdminController@general');
Route::get('/backend/grids','Backend\AdminController@grids');
Route::get('/backend/login','Backend\AdminController@login');
Route::get('/backend/profile','Backend\AdminController@profile');
Route::get('/backend/widgets','Backend\AdminController@widgets');