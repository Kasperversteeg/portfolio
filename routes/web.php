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
Route::get('portfolio-items', 'PortfolioItemController@index');
Route::get('featured-items', 'PortfolioItemController@featured');

Route::get('/', 'Controller@home');

Route::get('portfolio', 'Controller@portfolio');

Route::get('overmij', 'Controller@overmij');
