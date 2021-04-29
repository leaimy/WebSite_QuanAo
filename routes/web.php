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
    $sliders = \App\Slider::where('status', 1)->get();
    $feedbacks = \App\ClientFeedBack::where('status', 1)->get();
    $product = \App\Product::all();
    $categories = \App\Category::where('status', 1)->where('parent_id', '!=', 0)->get();
    $latest_products = \App\Product::take(10)->get();
    $featured_products = \App\Product::orderBy('views', 'desc')->take(8)->get();

    $background_images=glob(public_path('images/backgrounds/*.*'));
    $index = array_rand($background_images);
    $background_image = $background_images[$index];
    $background_image=str_replace(public_path().'\\','',$background_image);

    //TODO DEMO
    $best_seller_day = \App\Product::inRandomOrder()->limit(3)->get();
    $best_seller_week = \App\Product::inRandomOrder()->limit(3)->get();
    $best_seller_month = \App\Product::inRandomOrder()->limit(3)->get();

    $trending_categories = \App\Category::where('parent_id', '!=', 0)->inRandomOrder()->limit(4)->get();

    return view('Frontend.Home.index', [
        'sliders' => $sliders,
        'feedbacks' => $feedbacks,
        'categories' => $categories,
        'products' => $product,
        'latest_products' => $latest_products,
        'featured_products' => $featured_products,
        'background_image'=>$background_image,
        'best_seller_day'=>$best_seller_day,
        'best_seller_week'=>$best_seller_week,
        'best_seller_month'=>$best_seller_month,
        'trending_categories' => $trending_categories
    ]);
});

Route::get('/admin', function () {
    return view('Backend.Dashboard.index');
});

//Category
Route::get('/admin/categories', 'AdminCategoryController@index')->name('AdminCategory.index');
Route::get('/admin/categories/create', 'AdminCategoryController@create')->name('AdminCategory.create');
Route::post('/admin/categories/store', 'AdminCategoryController@store')->name('AdminCategory.store');
Route::get('/admin/categories/edit/{id}', 'AdminCategoryController@edit')->name('AdminCategory.edit');
Route::post('/admin/categories/update/{id}', 'AdminCategoryController@update')->name('AdminCategory.update');
Route::get('/admin/categories/delete/{id}', 'AdminCategoryController@delete')->name('AdminCategory.delete');

//Product
Route::get('/admin/products', 'AdminProductController@index')->name('AdminProduct.index');
Route::get('/admin/products/create', 'AdminProductController@create')->name('AdminProduct.create');
Route::post('/admin/products/store', 'AdminProductController@store')->name('AdminProduct.store');
Route::get('/admin/products/edit/{id}', 'AdminProductController@edit')->name('AdminProduct.edit');
Route::post('/admin/products/update/{id}', 'AdminProductController@update')->name('AdminProduct.update');
Route::get('/admin/products/delete/{id}', 'AdminProductController@delete')->name('AdminProduct.delete');

//Product Detail
Route::get('/admin/product-detail/create/{product_id}', 'AdminProductDetailController@create')->name('AdminProductDetail.create');
Route::post('/admin/product-detail/store/{product_id}', 'AdminProductDetailController@store')->name('AdminProductDetail.store');
Route::get('/admin/product-detail/edit/{product_id}/{id}', 'AdminProductDetailController@edit')->name('AdminProductDetail.edit');
Route::post('/admin/product-detail/update/{product_id}/{id}', 'AdminProductDetailController@update')->name('AdminProductDetail.update');
Route::get('/admin/product-detail/delete/{product_id}/{id}', 'AdminProductDetailController@delete')->name('AdminProductDetail.delete');
Route::get('/admin/product-detail/{product_id}', 'AdminProductDetailController@index')->name('AdminProductDetail.index');

// Slider
Route::get('/admin/sliders', 'AdminSliderController@index')->name('AdminSlider.index');
Route::get('/admin/sliders/create', 'AdminSliderController@create')->name('AdminSlider.create');
Route::post('/admin/sliders/store', 'AdminSliderController@store')->name('AdminSlider.store');
Route::get('/admin/sliders/edit/{slider}', 'AdminSliderController@edit')->name('AdminSlider.edit');
Route::post('/admin/sliders/update/{slider}', 'AdminSliderController@update')->name('AdminSlider.update');
Route::get('/admin/sliders/delete/{slider}', 'AdminSliderController@delete')->name('AdminSlider.delete');

Route::get('admin/sliders/status/enable/{slider}', 'AdminSliderController@setVisible')->name('AdminSlider.setVisible');
Route::get('admin/sliders/status/disable/{slider}', 'AdminSliderController@setHidden')->name('AdminSlider.setHidden');

// Client Feeback
Route::get('/admin/client-feedbacks', 'AdminClientFeedbackController@index')->name('AdminClientFeedback.index');
Route::get('/admin/client-feedbacks/create', 'AdminClientFeedbackController@create')->name('AdminClientFeedback.create');
Route::post('/admin/client-feedbacks/store', 'AdminClientFeedbackController@store')->name('AdminClientFeedback.store');
Route::get('/admin/client-feedbacks/edit/{feedback}', 'AdminClientFeedbackController@edit')->name('AdminClientFeedback.edit');
Route::post('/admin/client-feedbacks/update/{feedback}', 'AdminClientFeedbackController@update')->name('AdminClientFeedback.update');
Route::get('/admin/client-feedbacks/delete/{feedback}', 'AdminClientFeedbackController@delete')->name('AdminClientFeedback.delete');

Route::get('admin/client-feedbacks/status/enable/{feedback}', 'AdminClientFeedbackController@setVisible')->name('AdminClientFeedback.setVisible');
Route::get('admin/client-feedbacks/status/disable/{feedback}', 'AdminClientFeedbackController@setHidden')->name('AdminClientFeedback.setHidden');

// User
Route::get('/admin/users', 'AdminUserController@index')->name('AdminUser.index');
Route::get('/admin/users/show/{user}', 'AdminUserController@show')->name('AdminUser.show');
Route::get('/admin/users/create', 'AdminUserController@create')->name('AdminUser.create');
Route::post('/admin/users/store', 'AdminUserController@store')->name('AdminUser.store');
Route::get('/admin/users/edit/{user}', 'AdminUserController@edit')->name('AdminUser.edit');
Route::post('/admin/users/update/{user}', 'AdminUserController@update')->name('AdminUser.update');
Route::get('/admin/users/delete/{user}', 'AdminUserController@delete')->name('AdminUser.delete');

