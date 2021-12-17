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




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function(){
	return view('profile/view');
});

Route::get('/profile/edit', 'App\Http\Controllers\Controller@edit');

Route::post('/profile/saved', 'App\Http\Controllers\Controller@saved');

Route::post('/display/search', 'App\Http\Controllers\FlightController@search');

Route::get('/flights', 'App\Http\Controllers\FlightController@index');

Route::get('display/ticket/{id}', 'App\Http\Controllers\FlightController@view');

Route::post('/ticket/booked/{id}', 'App\Http\Controllers\TicketController@book');

Route::get('/ticket/all', 'App\Http\Controllers\TicketController@all');

Route::get('ticket/view/{id}', 'App\Http\Controllers\TicketController@view');

Route::get('ticket/cancel/{id}', 'App\Http\Controllers\TicketController@cancel');

Route::get('ticket/cancelled/{id}', 'App\Http\Controllers\TicketController@cancelled');

