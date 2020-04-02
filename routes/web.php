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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//=====admins.index=========
Route::get('/admins', 'AdminController@index')->name('admins.index');

//=======admin's.pharmacy==========
// all pharmacy routes under admins cortrol starts with 'admins'

Route::group(['prefix' => 'admins'], function () {

Route::get('pharmacy', 'PharmacyController@index')->name('pharmacy.index');
Route::get('pharmacy/create', 'PharmacyController@create')->name('pharmacy.create');
Route::post('pharmacy', 'PharmacyController@store')->name('pharmacy.store');
});