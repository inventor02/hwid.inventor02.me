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

Route::get('/', "HomeController@index");
Route::get("/about", "HomeController@info");
Route::get("/license", "HomeController@license");
Route::get("/go", "FormController@index");
Route::post("/go", "FormController@submit");