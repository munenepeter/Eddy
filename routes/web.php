<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/eddy', 'ClientController@index');
Route::get('/show', 'ClientController@show');
Route::post('/eddy', 'ClientController@store');
Route::get('/create', 'ClientController@create');
Route::get('/show/{client}', 'ClientController@show');
Route::get('/edit/{client}', 'ClientController@edit');
});
