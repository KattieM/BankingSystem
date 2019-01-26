<?php


Route::get('/', 'UserController@showForm');
Route::post('/', 'UserController@saveUser');