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

Route::get('/', 'Home@index');
Route::get('/home/viewTicket/{id}', 'Home@viewTicket')->name('viewTicket');
Route::post('/', 'Home@createReservation')->name("home.createReservation");

Auth::routes();
Route::get('/dashboard', 'Reservation@index')->name('dashboard');
Route::resource('/dashboard', 'Reservation');
Route::resource('/checkin', 'CheckIn');
Route::post('checkin/checkid', 'CheckIn@checkid')->name('checkid');
Route::resource('/report', 'Report');
