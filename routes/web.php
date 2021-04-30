<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $sliders = \App\Slider::where('status', 1)->get();
    $feedbacks = \App\ClientFeedBack::where('status', 1)->get();
    $product = \App\Product::all();
    $categories = \App\Category::where('status', 1)->where('parent_id', '!=', 0)->get();
    $latest_products = \App\Product::take(10)->get();
    $featured_products = \App\Product::orderBy('views', 'desc')->take(8)->get();

    $background_images = glob(public_path('images/backgrounds/*.*'));
    $index = array_rand($background_images);
    $background_image = $background_images[$index];
    $background_image = str_replace(public_path() . '\\', '', $background_image);

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
        'background_image' => $background_image,
        'best_seller_day' => $best_seller_day,
        'best_seller_week' => $best_seller_week,
        'best_seller_month' => $best_seller_month,
        'trending_categories' => $trending_categories
    ]);
});

/**
 * Authenticate người dùng
 */
Route::get('/admin/auth/login', 'AuthController@renderLoginForm')->name('auth.login.index');
Route::post('/admin/auth/login', 'AuthController@logUserIn')->name('auth.login.login');
Route::get('/admin/auth/logout', 'AuthController@logUserOut')->name('auth.logout.logout');

Route::middleware('auth')->group(function () {

    /**
     * Trang quản lý tổng quan
     */
    Route::get('/admin', function () {
        return view('Backend.Dashboard.index');
    })->name('Admin.home');

    /**
     * Quản lý nhóm sản phẩm
     */
    Route::prefix('/admin/categories')->group(function () {
        Route::get('/', 'AdminCategoryController@index')->name('AdminCategory.index');
        Route::get('create', 'AdminCategoryController@create')->name('AdminCategory.create');
        Route::post('store', 'AdminCategoryController@store')->name('AdminCategory.store');
        Route::get('edit/{id}', 'AdminCategoryController@edit')->name('AdminCategory.edit');
        Route::post('update/{id}', 'AdminCategoryController@update')->name('AdminCategory.update');
        Route::get('delete/{id}', 'AdminCategoryController@delete')->name('AdminCategory.delete');
    });

    /**
     * Quản lý sản phẩm
     */
    Route::prefix('/admin/products')->group(function () {
        Route::get('/', 'AdminProductController@index')->name('AdminProduct.index');
        Route::get('create', 'AdminProductController@create')->name('AdminProduct.create');
        Route::post('store', 'AdminProductController@store')->name('AdminProduct.store');
        Route::get('edit/{id}', 'AdminProductController@edit')->name('AdminProduct.edit');
        Route::post('update/{id}', 'AdminProductController@update')->name('AdminProduct.update');
        Route::get('delete/{id}', 'AdminProductController@delete')->name('AdminProduct.delete');
    });

    /**
     * Quản lý chi tiết sản phẩm
     */
    Route::prefix('/admin/product-details')->group(function () {
        Route::get('create/{product_id}', 'AdminProductDetailController@create')->name('AdminProductDetail.create');
        Route::post('store/{product_id}', 'AdminProductDetailController@store')->name('AdminProductDetail.store');
        Route::get('edit/{product_id}/{id}', 'AdminProductDetailController@edit')->name('AdminProductDetail.edit');
        Route::post('update/{product_id}/{id}', 'AdminProductDetailController@update')->name('AdminProductDetail.update');
        Route::get('delete/{product_id}/{id}', 'AdminProductDetailController@delete')->name('AdminProductDetail.delete');
        Route::get('{product_id}', 'AdminProductDetailController@index')->name('AdminProductDetail.index');
    });

    /**
     * Quản lý danh sách sliders
     */
    Route::prefix('/admin/sliders')->group(function () {
        Route::get('/', 'AdminSliderController@index')->name('AdminSlider.index');
        Route::get('create', 'AdminSliderController@create')->name('AdminSlider.create');
        Route::post('store', 'AdminSliderController@store')->name('AdminSlider.store');
        Route::get('edit/{slider}', 'AdminSliderController@edit')->name('AdminSlider.edit');
        Route::post('update/{slider}', 'AdminSliderController@update')->name('AdminSlider.update');
        Route::get('delete/{slider}', 'AdminSliderController@delete')->name('AdminSlider.delete');

        Route::get('status/enable/{slider}', 'AdminSliderController@setVisible')->name('AdminSlider.setVisible');
        Route::get('status/disable/{slider}', 'AdminSliderController@setHidden')->name('AdminSlider.setHidden');
    });

    /**
     * Quản lý danh sách phản hồi của người dùng
     */
    Route::prefix('/admin/testimonials')->group(function () {
        Route::get('/', 'AdminClientFeedbackController@index')->name('AdminClientFeedback.index');
        Route::get('create', 'AdminClientFeedbackController@create')->name('AdminClientFeedback.create');
        Route::post('store', 'AdminClientFeedbackController@store')->name('AdminClientFeedback.store');
        Route::get('edit/{feedback}', 'AdminClientFeedbackController@edit')->name('AdminClientFeedback.edit');
        Route::post('update/{feedback}', 'AdminClientFeedbackController@update')->name('AdminClientFeedback.update');
        Route::get('delete/{feedback}', 'AdminClientFeedbackController@delete')->name('AdminClientFeedback.delete');

        Route::get('status/enable/{feedback}', 'AdminClientFeedbackController@setVisible')->name('AdminClientFeedback.setVisible');
        Route::get('status/disable/{feedback}', 'AdminClientFeedbackController@setHidden')->name('AdminClientFeedback.setHidden');
    });

    /**
     * Quản lý danh sách người dùng
     */
    Route::prefix('/admin/users')->group(function () {
        Route::get('/', 'AdminUserController@index')->name('AdminUser.index');
        Route::get('show/{user}', 'AdminUserController@show')->name('AdminUser.show');
        Route::get('create', 'AdminUserController@create')->name('AdminUser.create');
        Route::post('store', 'AdminUserController@store')->name('AdminUser.store');
        Route::get('edit/{user}', 'AdminUserController@edit')->name('AdminUser.edit');
        Route::post('update/{user}', 'AdminUserController@update')->name('AdminUser.update');
        Route::get('delete/{user}', 'AdminUserController@delete')->name('AdminUser.delete');
    });

    /**
     * Quản lý danh sách vai trò
     */
    Route::prefix('/admin/roles')->group(function () {
        Route::get('/', 'AdminRoleController@index')->name('AdminRole.index');
        Route::get('create', 'AdminRoleController@create')->name('AdminRole.create');
        Route::post('store', 'AdminController@store')->name('AdminRole.store');
    });

});
