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
Route::get('p-items', 'PortfolioItemController@index');
Route::get('featured-items', 'PortfolioItemController@featured');

Route::get('/', function () {
   return view('home');
});

Route::get('portfolio', function () {
    return view('portfolio');
});

Route::get('service', function () {
    return view('service');
});

Route::get('overmij', function () {
    return view('overmij');
});
