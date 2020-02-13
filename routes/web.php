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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/ticketUser','TicketUsersController');
Route::resource('/stalls','StallsController');
Route::resource('/orderedFood','OrderedFoodController');
Route::resource('/food','FoodController');
Route::get('/','PagesController@home');
Route::get('/reset','OrderedFoodController@reset');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/details', 'PagesController@details');


Route::resource('datatables', 'DatatablesController', [
    'ticketUser'  => 'datatables.data',
    
]);