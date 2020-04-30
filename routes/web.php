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

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/', 'AutoshipsProfileController@index');
Route::get('/create-authoship-profile', 'AutoshipsProfileController@create');
Route::post('/store-authoship-profile', 'AutoshipsProfileController@store');
Route::get('/view-authoship-profile/{id}', 'AutoshipsProfileController@show');
Route::get('/edit-authoship-profile', 'AutoshipsProfileController@edit');


