<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('create');
})->name('create');

//Route::get('/update/all', function () {
//    return view('update');
//})->name('update');

Route::post('/item/submit', 'App\Http\Controllers\ItemController@submitItm')
    ->name('item-form');

Route::post('/category/submit', 'App\Http\Controllers\CategoryController@submitCtgr')
    ->name('category-form');

Route::get('/update/allItems', 'App\Http\Controllers\ItemController@itemsData')
    ->name('item-data');

Route::get('/layout', 'App\Http\Controllers\CategoryController@ctgrData')
    ->name('ctgr-data');
