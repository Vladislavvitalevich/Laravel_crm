<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form/first', function () {
    return view('forms.form1');
})->name('form1');

Route::resource('form','FormController');

Auth::routes();

