<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('form','FormController');
Route::post('/form/search', 'FormController@search')->name('form.search');

Auth::routes();

