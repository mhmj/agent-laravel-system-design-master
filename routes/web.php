<?php

use Illuminate\Support\Facades\Route;

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
})->name('/');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/list-order-hq', 'HomeController@listOrderHQ')->name('list.order.hq')->middleware('verified');
Route::get('/list-order-team', 'HomeController@listOrderTeam')->name('list.order.team')->middleware('verified');
Route::get('/list-deleted-order', 'HomeController@deletedOrder')->name('list.deleted.order')->middleware('verified');

Route::get('/list-product', 'HomeController@ListProducts')->name('list.product')->middleware('verified');
Route::get('/add-product', 'HomeController@AddProducts')->name('add.product')->middleware('verified');

Route::get('/list-team', 'HomeController@ListTeam')->name('list.team')->middleware('verified');
Route::get('/genelogy', 'HomeController@Genelogy')->name('genelogy')->middleware('verified');
Route::get('/roles', 'HomeController@Roles')->name('roles')->middleware('verified');
Route::get('/new-application', 'HomeController@NewApplication')->name('new.application')->middleware('verified');
Route::get('/territory', 'HomeController@Territory')->name('territory')->middleware('verified');
Route::get('/states', 'HomeController@State')->name('states')->middleware('verified');
