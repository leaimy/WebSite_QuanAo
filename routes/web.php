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
    return view('Frontend.Home.index');
});

Route::get('/admin', function () {
    return view('Backend.index');
});

//Category
Route::get('/admin/categories','AdminCategoryController@index')->name('AdminCategory.index');
Route::get('/admin/categories/create','AdminCategoryController@create')->name('AdminCategory.create');
Route::post('/admin/categories/store','AdminCategoryController@store')->name('AdminCategory.store');
Route::get('/admin/categories/edit/{id}','AdminCategoryController@edit')->name('AdminCategory.edit');
Route::post('/admin/categories/update/{id}','AdminCategoryController@update')->name('AdminCategory.update');
Route::get('/admin/categories/delete/{id}','AdminCategoryController@delete')->name('AdminCategory.delete');

//Product
Route::get('/admin/products','AdminProductController@index')->name('AdminProduct.index');
Route::get('/admin/products/create','AdminProductController@create')->name('AdminProduct.create');
Route::post('/admin/products/store','AdminProductController@store')->name('AdminProduct.store');
