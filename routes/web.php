<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'AdminController@index')->name('admin');

// Product
Route::resource('/product', 'ProductController');
