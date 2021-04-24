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

// Slider
Route::get('/admin/sliders', 'AdminSliderController@index')->name('AdminSlider.index');
Route::get('/admin/sliders/create', 'AdminSliderController@create')->name('AdminSlider.create');
Route::post('/admin/sliders/store', 'AdminSliderController@store')->name('AdminSlider.store');
Route::get('/admin/sliders/edit/{slider}', 'AdminSliderController@edit')->name('AdminSlider.edit');
Route::post('/admin/sliders/update/{slider}', 'AdminSliderController@update')->name('AdminSlider.update');
Route::get('/admin/sliders/delete/{slider}', 'AdminSliderController@delete')->name('AdminSlider.delete');
