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

Route::get("/",'BootstrapController@index');
Route::get("/list",'BootstrapController@list');
Route::get("/about",'BootstrapController@about');
Route::get("/contact",'BootstrapController@contact');
