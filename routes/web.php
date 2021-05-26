<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('create');
//})->name('create');

Route::post('/item/submit', 'App\Http\Controllers\ItemController@submitItm')
    ->name('item-form');

Route::post('/category/submit', 'App\Http\Controllers\CategoryController@submitCtgr')
    ->name('category-form');

Route::get('/update/allItems', 'App\Http\Controllers\ItemController@itemsData')
    ->name('item-data');

Route::get(
    '/update/allItems/{id}',
    'App\Http\Controllers\ItemController@getOneItm')
    ->name('one-item');

Route::post(
    '/update/allItems/{id}',
    'App\Http\Controllers\ItemController@updatedItemSubmit')
    ->name('updated-item-submit');

Route::get('/', 'App\Http\Controllers\CategoryController@ctgrData')
    ->name('create');

//Route::get('/update/allItems', 'App\Http\Controllers\CategoryController@ctgrDataforItms')
//    ->name('crgt-for-items');
