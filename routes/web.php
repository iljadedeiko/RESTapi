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

Route::get('/', function () {
    return view('create');
})->name('create');

Route::get('/update', function () {
    return view('update');
})->name('update');

//Route::get('/item/{id}{name}', function($id, $name) {
//    return view('item');
//});

Route::post('/item/submit', 'App\Http\Controllers\ItemController@submitItm')
    ->name('item-form');

Route::post('/category/submit', 'App\Http\Controllers\CategoryController@submitCtgr')
    ->name('category-form');
