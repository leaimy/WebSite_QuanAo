<?php

use App\Customer;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $sliders = \App\Slider::where('status', 1)->get();
    $feedbacks = \App\ClientFeedBack::where('status', 1)->get();
    $product = \App\Product::all();
    $categories = \App\Category::where('status', 1)->where('parent_id', '!=', 0)->get();
    $parent_categories = \App\Category::where('status', 1)->where('parent_id', 0)->get();
    $latest_products = \App\Product::take(10)->get();
    $featured_products = \App\Product::orderBy('views', 'desc')->take(8)->get();
    //cua hang
    $websiteconfig = \App\Website::all();

    $background_images = glob(public_path('images/backgrounds/*.*'));
    $index = array_rand($background_images);
    $background_image = $background_images[$index];
    $background_image = str_replace(public_path() . '\\', '', $background_image);

    //TODO DEMO
    $best_seller_day = \App\Product::inRandomOrder()->limit(3)->get();
    $best_seller_week = \App\Product::inRandomOrder()->limit(3)->get();
    $best_seller_month = \App\Product::inRandomOrder()->limit(3)->get();

    $trending_categories = \App\Category::where('parent_id', '!=', 0)->inRandomOrder()->limit(4)->get();

    // dd(Auth::guard('customer')->user());

    return view('Frontend.Home.index', [
        'websiteconfig' => $websiteconfig,
        'sliders' => $sliders,
        'feedbacks' => $feedbacks,
        'parent_categories' => $parent_categories,
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
})->name('frontend.index');

Route::get('/chi-tiet-san-pham/{slug}', function ($slug) {
    $parent_categories = \App\Category::where('status', 1)->where('parent_id', 0)->get();
    $websiteconfig = \App\Website::all();
    $product = \App\Product::where('slug', $slug)->get()[0];
    $categories = \App\Category::where('status', 1)->where('parent_id', '!=', 0)->get();

    $productimages = \App\ProductImage::where('product_id', $product->id)->get();
    $productdetails = \App\ProductDetail::where('product_id', $product->id)->get();

    $unique_colors = TrichXuatColor($productdetails);
    $unique_sizes = TrichXuatSize($productdetails);

    $category_id = $product->category_id;

    $random_products = \App\Product::where('category_id', $category_id)->get();
    $products = LaySanPhamNgauNhien($random_products, $product->id);

    return view('Frontend.Home.chi-tiet-san-pham', [
        'websiteconfig' => $websiteconfig,
        'parent_categories' => $parent_categories,
        'product' => $product,
        'productimages' => $productimages,
        'productdetails' => $productdetails,
        'unique_sizes' => $unique_sizes,
        'unique_colors' => $unique_colors,
        'products' => $products,
        'categories' => $categories
    ]);
})->name('chitietsanpham');

if (!function_exists('LaySanPhamNgauNhien'))
{
    function LaySanPhamNgauNhien($array, $id)
    {
        $newarray = [];
        foreach ($array as $item) {
            if ($item->id != $id) {
                array_push($newarray, $item);
            }
        }

        shuffle($newarray);

        $results = [];
        $i = 0;

        foreach ($newarray as $item) {
            array_push($results, $item);
            $i++;

            if ($i == 6) break;
        }

        return $results;
    }
}

if (!function_exists('TrichXuatColor'))
{
    function TrichXuatColor($array)
    {
        $colors = [];
        $unique_colors = [];
        foreach ($array as $item) {
            $color = $item->color;
            array_push($colors, $color);
        }

        foreach ($colors as $mau) {
            $kiemtra = KiemTraTonTai($unique_colors, $mau);
            if ($kiemtra == false)
                array_push($unique_colors, $mau);
        }

        return $unique_colors;
    }
}

if (!function_exists('TrichXuatSize'))
{
    function TrichXuatSize($array)
    {
        $sizes = [];
        $unique_sizes = [];
        foreach ($array as $item) {
            $size = $item->size;
            array_push($sizes, $size);
        }

        foreach ($sizes as $kichthuoc) {
            $kiemtra = KiemTraTonTai($unique_sizes, $kichthuoc);
            if ($kiemtra == false)
                array_push($unique_sizes, $kichthuoc);
        }

        return $unique_sizes;
    }
}

if (!function_exists('KiemTraTonTai')) {
    function KiemTraTonTai($array, $str)
    {
        $tontai = false;
        foreach ($array as $newstr) {
            if ($newstr == $str) {
                $tontai = true;
                break;
            }
        }
        return $tontai;
    }
}

Route::get('/gio-hang', function () {
    $parent_categories = \App\Category::where('status', 1)->where('parent_id', 0)->get();
    $websiteconfig = \App\Website::all();

    return view('Frontend.cart', [
        'websiteconfig' => $websiteconfig,
        'parent_categories' => $parent_categories,
    ]);
})->name('frontend.cart');

Route::get('/thanh-toan', function () {
    $parent_categories = \App\Category::where('status', 1)->where('parent_id', 0)->get();
    $websiteconfig = \App\Website::all();
    $customer = Auth::guard('customer')->user();

    if (!$customer instanceof Customer)
        return redirect('/dang-nhap');

    return view('Frontend.checkout', [
        'websiteconfig' => $websiteconfig,
        'parent_categories' => $parent_categories,
        'customer' => $customer
    ]);
})->name('frontend.checkout');

Route::post('/thanh-toan', 'OrderController@storeFromWeb')->name('frontend.checkout.create');


/**
 * Kh??ch h??ng
 */
Route::get('/dang-nhap', 'ClientLoginController@showLoginForm')->name('khachhangdangnhap');
Route::post('/dang-nhap', 'ClientLoginController@login')->name('dangnhap');
Route::get('/dang-xuat', 'ClientLoginController@logout')->name('dangxuat');

Route::get('/tao-tai-khoan', 'ClientCustomerController@create')->name('khachhangtaotaikhoan');
Route::post('/tao-tai-khoan', 'ClientCustomerController@store')->name('taotaikhoan');
Route::get('/cap-nhat-ho-so', 'ClientCustomerController@edit')->name('capnhathoso');
Route::post('/cap-nhat-tai-khoan/{customer}', 'ClientCustomerController@update')->name('capnhattaikhoan');
Route::get('/thong-tin-ca-nhan', 'ClientCustomerController@show')->name('thongtincanhan');

Route::get('/thong-tin-don-hang', 'ClientCustomerController@thongtindonhang')->name('thongtindonhang');
Route::get('/chi-tiet-don-hang/{order}', 'ClientCustomerController@ChiTietDonHang')->name('chitietdonhang');

/**
 * API Route
 */
Route::get('/api/v1/tinh', function () {
    // Read File
    $jsonString = file_get_contents(base_path('api_data/tinh_tp.json'));
    return json_decode($jsonString, true);
});
/**
 * Danh s??ch s???n ph???m
 */
Route::get('/danh-sach-san-pham/{id}', 'ClientProductController@index')->name('danhsachsanpham');

Route::get('/api/v1/quan-huyen/{tinh_id}', function ($tinh_id) {
    // Read File
    $jsonString = file_get_contents(base_path('api_data/quan_huyen.json'));

    $data = json_decode($jsonString, true);

    $final_data = [];

    foreach ($data as $item) {
        if ($item['parent_code'] == $tinh_id) {
            array_push($final_data, $item);
        }
    }

    return $final_data;
});

Route::get('/api/v1/xa-phuong/{quan_huyen_id}', function ($quan_huyen_id) {
    // Read File
    $jsonString = file_get_contents(base_path('api_data/xa-phuong/' . $quan_huyen_id . '.json'));

    return json_decode($jsonString, true);
});


/**
 * Authenticate ng?????i d??ng
 */
Route::get('/admin/auth/login', 'AuthController@renderLoginForm')->name('auth.login.index');
Route::post('/admin/auth/login', 'AuthController@logUserIn')->name('auth.login.login');
Route::get('/admin/auth/logout', 'AuthController@logUserOut')->name('auth.logout.logout');

Route::middleware('auth')->group(function () {

    /**
     * Trang qu???n l?? t???ng quan
     */
    Route::get('/admin', 'DashboardController@index')->name('Admin.home');

    /**
     * Qu???n l?? c???a h??ng
     */
    Route::get('/admin/website', 'AdminWebsiteController@index')->name('AdminWebsite.index');
    Route::post('/admin/website/update', 'AdminWebsiteController@update')->name('AdminWebsite.update');

    /**
     * Qu???n l?? nh??m s???n ph???m
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
     * Qu???n l?? s???n ph???m
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
     * Qu???n l?? chi ti???t s???n ph???m
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
     * Qu???n l?? danh s??ch sliders
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
     * Qu???n l?? danh s??ch ph???n h???i c???a ng?????i d??ng
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
     * Qu???n l?? danh s??ch ng?????i d??ng
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
     * Qu???n l?? danh s??ch kh??ch h??ng
     */
    Route::prefix('/admin/customers')->group(function () {
        Route::get('/', 'AdminCustomerController@index')->name('AdminCustomer.index');
        Route::get('show/{customer}', 'AdminCustomerController@show')->name('AdminCustomer.show');
        Route::get('create', 'AdminCustomerController@create')->name('AdminCustomer.create');
        Route::post('store', 'AdminCustomerController@store')->name('AdminCustomer.store');
        Route::get('edit/{customer}', 'AdminCustomerController@edit')->name('AdminCustomer.edit');
        Route::post('update/{customer}', 'AdminCustomerController@update')->name('AdminCustomer.update');
        Route::get('delete/{customer}', 'AdminCustomerController@delete')->name('AdminCustomer.delete');
    });

    /**
     * Qu???n l?? danh s??ch vai tr??
     */
    Route::prefix('/admin/roles')->group(function () {
        Route::get('/', 'AdminRoleController@index')->name('AdminRole.index');
        Route::get('create', 'AdminRoleController@create')->name('AdminRole.create');
        Route::post('store', 'AdminController@store')->name('AdminRole.store');
    });

    /**
     * Qu???n l?? danh s??ch ????n h??ng
     */
    Route::prefix('/admin/orders')->group(function () {
        Route::get('/', 'OrderController@index')->name('Order.index');
        Route::post('/store-web', 'OrderController@storeFromWeb')->name('Order.store.web');
        Route::post('/store-user', 'OrderController@storeFromUser')->name('Order.store.user');
        Route::post('/status/{order}', 'OrderController@changeStatus')->name('AdminOrder.status');
    });

    /**
     * Qu???n l?? ????n h??ng chi ti???t
     */
    Route::prefix('/admin/orders/detail')->group(function () {
        Route::get('/{order}', 'OrderDetailContrller@show')->name('AdminOrderDetail.show');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
