<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('frontend/images/favicon.png') }}" rel="shortcut icon">
    <title>Shop Bạch Tuyết 🐇 | Cửa hàng quần áo số 1 Việt Nam</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor.css') }}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('frontend/css/utility.css') }}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('frontend/css/app.css') }}">

    <!--===== Custom ====-->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
</head>
<body class="config">
<div class="preloader is-active">
    <div class="preloader__wrap">

        <img class="preloader__img" src="{{ asset('frontend/images/preloader.png') }}" alt=""></div>
</div>

<!--====== Main App ======-->
<div id="app">

    <!--====== Main Header ======-->
    <header class="header--style-1">

        <!--====== Nav 1 ======-->
        <nav class="primary-nav primary-nav-wrapper--border">
            <div class="container">

                <!--====== Primary Nav ======-->
                <div class="primary-nav">

                    <!--====== Main Logo ======-->

                    <a class="main-logo" href="index.html">
                        @foreach($websiteconfig as $item)
                            @if($item->config_key=='LOGO_IMAGE')
                                <img src="{{ asset($item->config_value) }}" alt=""></a>
                @endif
                @endforeach
                <!--====== End - Main Logo ======-->


                    <!--====== Search Form ======-->
                    <form class="main-form">

                        <label for="main-search"></label>

                        <input class="input-text input-text--border-radius input-text--style-1" type="text"
                               id="main-search" placeholder="Tìm kiếm sản phẩm...">

                        <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button>
                    </form>
                    <!--====== End - Search Form ======-->


                    <!--====== Dropdown Main plugin ======-->
                    <div class="menu-init" id="navigation">

                        <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs"
                                type="button"></button>

                        <!--====== Menu ======-->
                        <div class="ah-lg-mode">

                            <span class="ah-close">✕ Close</span>

                            <!--====== List ======-->
                            <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                <li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
                                    title="Tài khoản khách hàng">

                                    <a><i class="far fa-user-circle"></i></a>

                                    <!--====== Dropdown ======-->

                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:120px">
                                        <li>

                                            <a href="dashboard.html"><i class="fas fa-user-circle u-s-m-r-6"></i>

                                                <span>Thông tin khách hàng</span></a></li>
                                        <li>

                                            <a href="signup.html"><i class="fas fa-user-plus u-s-m-r-6"></i>

                                                <span>Tạo tài khoản</span></a></li>
                                        <li>

                                            <a href="signin.html"><i class="fas fa-lock u-s-m-r-6"></i>

                                                <span>Đăng nhập</span></a></li>

                                    </ul>
                                    <!--====== End - Dropdown ======-->
                                </li>

                                @foreach($websiteconfig as $item)
                                    @if($item->config_key=='PHONE_NUMBER')
                                        <li data-tooltip="tooltip" data-placement="left" title="Liên hệ">

                                            <a href="tel:+{{$item->config_value}}"><i
                                                    class="fas fa-phone-volume"></i></a>

                                        </li>
                                    @endif
                                    @if($item->config_key=='EMAIL')
                                        <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                            <a href="mailto:{{$item->config_value}}"><i class="far fa-envelope"></i></a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <!--====== End - List ======-->
                        </div>
                        <!--====== End - Menu ======-->
                    </div>
                    <!--====== End - Dropdown Main plugin ======-->
                </div>
                <!--====== End - Primary Nav ======-->
            </div>
        </nav>
        <!--====== End - Nav 1 ======-->


        <!--====== Nav 2 ======-->
        <nav class="secondary-nav-wrapper">
            <div class="container">

                <!--====== Secondary Nav ======-->
                <div class="secondary-nav">

                    <!--====== Dropdown Main plugin ======-->
                    <div class="menu-init" id="navigation1">

                        <button class="btn btn--icon toggle-mega-text toggle-button" type="button">M</button>

                        <!--====== Menu ======-->
                        <div class="ah-lg-mode">

                            <span class="ah-close">✕ Close</span>

                            <!--====== List ======-->

                            <!--====== End - List ======-->
                        </div>
                        <!--====== End - Menu ======-->
                    </div>
                    <!--====== End - Dropdown Main plugin ======-->


                    <!--====== Dropdown Main plugin ======-->
                    <div class="menu-init" id="navigation2">

                        <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog"
                                type="button"></button>

                        <!--====== Menu ======-->
                        <div class="ah-lg-mode">

                            <span class="ah-close">✕ Close</span>

                            <!--====== List ======-->
                            <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">

                                <li>
                                    <a href="#product-trending">XU HƯỚNG</a>
                                </li>

                                <li>
                                    <a href="#new-products">SẢN PHẨM MỚI</a>
                                </li>

                                <li>
                                    <a href="#top-selling-product">SẢN PHẨM BÁN CHẠY</a>
                                </li>

                                @foreach($parent_categories as $parent_category)

                                    @if (\App\Category::where('parent_id', $parent_category->id)->count() > 0)
                                    <li class="has-dropdown">

                                    <a>{{ mb_convert_case($parent_category->name, MB_CASE_UPPER, "UTF-8") }} <i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                    <!--====== Dropdown ======-->

                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:200px">
                                        @foreach(\App\Category::where('parent_id', $parent_category->id)->get() as $category)
                                            <li>
                                                <a href="blog-left-sidebar.html">{{ mb_convert_case($category->name, MB_CASE_UPPER, "UTF-8") }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <!--====== End - Dropdown ======-->
                                </li>
                                    @endif

                                @endforeach

                                <li>
                                    <a href="#footer">LIÊN HỆ</a>
                                </li>
                            </ul>
                            <!--====== End - List ======-->
                        </div>
                        <!--====== End - Menu ======-->
                    </div>
                    <!--====== End - Dropdown Main plugin ======-->


                    <!--====== Dropdown Main plugin ======-->
                    <div class="menu-init" id="navigation3">

                        <button
                            class="btn btn--icon toggle-button toggle-button--secondary fas fa-shopping-bag toggle-button-shop"
                            type="button"></button>

                        <span class="total-item-round">2</span>

                        <!--====== Menu ======-->
                        <div class="ah-lg-mode">

                            <span class="ah-close">✕ Close</span>

                            <!--====== List ======-->
                            <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                <li>

                                    <a href="index.html"><i class="fas fa-home u-c-brand"></i></a></li>

                                <li class="has-dropdown">

                                    <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>

                                        <span class="total-item-round">2</span></a>

                                    <!--====== Dropdown ======-->

                                    <span class="js-menu-toggle"></span>
                                    <div class="mini-cart">

                                        <!--====== Mini Product Container ======-->
                                        <div class="mini-product-container gl-scroll u-s-m-b-15">

                                            <!--====== Card for mini cart ======-->
                                            <div class="card-mini-product">
                                                <div class="mini-product">
                                                    <div class="mini-product__image-wrapper">

                                                        <a class="mini-product__link" href="product-detail.html">

                                                            <img class="u-img-fluid"
                                                                 src="{{ asset('frontend/images/product/electronic/product3.jpg') }}"
                                                                 alt=""></a></div>
                                                    <div class="mini-product__info-wrapper">

                                                            <span class="mini-product__category">

                                                                <a href="shop-side-version-2.html">Electronics</a></span>

                                                        <span class="mini-product__name">

                                                                <a href="product-detail.html">Yellow Wireless Headphone</a></span>

                                                        <span class="mini-product__quantity">1 x</span>

                                                        <span class="mini-product__price">$8</span></div>
                                                </div>

                                                <a class="mini-product__delete-link far fa-trash-alt"></a>
                                            </div>
                                            <!--====== End - Card for mini cart ======-->


                                            <!--====== Card for mini cart ======-->
                                            <div class="card-mini-product">
                                                <div class="mini-product">
                                                    <div class="mini-product__image-wrapper">

                                                        <a class="mini-product__link" href="product-detail.html">

                                                            <img class="u-img-fluid"
                                                                 src="{{ asset('frontend/images/product/electronic/product18.jpg') }}"
                                                                 alt=""></a></div>
                                                    <div class="mini-product__info-wrapper">

                                                            <span class="mini-product__category">

                                                                <a href="shop-side-version-2.html">Electronics</a></span>

                                                        <span class="mini-product__name">

                                                                <a href="product-detail.html">Nikon DSLR Camera 4k</a></span>

                                                        <span class="mini-product__quantity">1 x</span>

                                                        <span class="mini-product__price">$8</span></div>
                                                </div>

                                                <a class="mini-product__delete-link far fa-trash-alt"></a>
                                            </div>
                                            <!--====== End - Card for mini cart ======-->


                                            <!--====== Card for mini cart ======-->
                                            <div class="card-mini-product">
                                                <div class="mini-product">
                                                    <div class="mini-product__image-wrapper">

                                                        <a class="mini-product__link" href="product-detail.html">

                                                            <img class="u-img-fluid"
                                                                 src="{{ asset('frontend/images/product/women/product8.jpg') }}"
                                                                 alt=""></a></div>
                                                    <div class="mini-product__info-wrapper">

                                                            <span class="mini-product__category">

                                                                <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                        <span class="mini-product__name">

                                                                <a href="product-detail.html">New Dress D Nice Elegant</a></span>

                                                        <span class="mini-product__quantity">1 x</span>

                                                        <span class="mini-product__price">$8</span></div>
                                                </div>

                                                <a class="mini-product__delete-link far fa-trash-alt"></a>
                                            </div>
                                            <!--====== End - Card for mini cart ======-->


                                            <!--====== Card for mini cart ======-->
                                            <div class="card-mini-product">
                                                <div class="mini-product">
                                                    <div class="mini-product__image-wrapper">

                                                        <a class="mini-product__link" href="product-detail.html">

                                                            <img class="u-img-fluid"
                                                                 src="{{ asset('frontend/images/product/men/product8.jpg') }}"
                                                                 alt=""></a></div>
                                                    <div class="mini-product__info-wrapper">

                                                            <span class="mini-product__category">

                                                                <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                        <span class="mini-product__name">

                                                                <a href="product-detail.html">New Fashion D Nice Elegant</a></span>

                                                        <span class="mini-product__quantity">1 x</span>

                                                        <span class="mini-product__price">$8</span></div>
                                                </div>

                                                <a class="mini-product__delete-link far fa-trash-alt"></a>
                                            </div>
                                            <!--====== End - Card for mini cart ======-->
                                        </div>
                                        <!--====== End - Mini Product Container ======-->


                                        <!--====== Mini Product Statistics ======-->
                                        <div class="mini-product-stat">
                                            <div class="mini-total">

                                                <span class="subtotal-text">SUBTOTAL</span>

                                                <span class="subtotal-value">$16</span></div>
                                            <div class="mini-action">

                                                <a class="mini-link btn--e-brand-b-2" href="checkout.html">PROCEED TO
                                                    CHECKOUT</a>

                                                <a class="mini-link btn--e-transparent-secondary-b-2" href="cart.html">VIEW
                                                    CART</a></div>
                                        </div>
                                        <!--====== End - Mini Product Statistics ======-->
                                    </div>
                                    <!--====== End - Dropdown ======-->
                                </li>
                            </ul>
                            <!--====== End - List ======-->
                        </div>
                        <!--====== End - Menu ======-->
                    </div>
                    <!--====== End - Dropdown Main plugin ======-->
                </div>
                <!--====== End - Secondary Nav ======-->
            </div>
        </nav>
        <!--====== End - Nav 2 ======-->
    </header>
    <!--====== End - Main Header ======-->


    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Primary Slider ======-->
        <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
            <div class="owl-carousel primary-style-1" id="hero-slider">
                @foreach($sliders as $index=>$slider)
                    <div style="background-image: url({{ asset($slider->image_path) }});"
                         class="hero-slide hero-slide--{{ $index+1 }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    {!! $slider->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
        <!--====== End - Primary Slider ======-->


        <!--====== Section 1 | Danh mục ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">SẢN PHẨM 🍑</h1>

                                <span class="section__span u-c-silver">🍑 MUA NGAY MUA NGAY SẢN PHẨM ĐẸP QUÁ 🍑</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        @for($i=0;$i<3;$i++)
                            @if($i==0)
                                <div class="col-lg-5 col-md-5 u-s-m-b-30">

                                    <a class="collection" href="shop-side-version-2.html">
                                        <div class="aspect aspect--bg-grey aspect--square">

                                            <img class="aspect__img collection__img"
                                                 src="{{ asset($products[$i]->preview_image_path) }}" alt=""></div>
                                    </a></div>
                            @else
                                <div style="margin-left: auto; margin-right: auto;" class="col-lg-7 col-md-7 u-s-m-b-30">

                                    <a class="collection" href="shop-side-version-2.html">
                                        <div class="aspect aspect--bg-grey aspect--1286-890">

                                            <img class="aspect__img collection__img"
                                                 src="{{ asset($products[$i]->preview_image_path) }}" alt=""></div>
                                    </a></div>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>

            <!--====== Section Content ======-->
        </div>
        <!--====== End - Section 1 ======-->


        <!--====== Section 2 | Xu hướng sản phẩm ======-->
        <div class="u-s-p-b-60" id="product-trending">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-16">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">XU HƯỚNG 🎀</h1>

                                <span class="section__span u-c-silver">🎀 CHỌN MUA NGAY NÀO 🎀</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filter-category-container">

                                <div class="filter__category-wrapper">

                                    <button class="btn filter__btn filter__btn--style-1 js-checked" type="button"
                                            id="cat-all"
                                            data-filter="*">TẤT CẢ
                                    </button>
                                </div>

                                @foreach($trending_categories as $category)

                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button"
                                                id="cat-{{ $loop->index }}"
                                                data-filter=".cat-{{ $category->id }}">{{ mb_convert_case($category->name, MB_CASE_UPPER, "UTF-8")  }}
                                        </button>
                                    </div>

                                @endforeach

                            </div>
                            <div class="filter__grid-wrapper u-s-m-t-30">
                                <div class="row">

                                    @foreach($trending_categories as $category)
                                        @foreach(\App\Product::where('category_id', $category->id)->inRandomOrder()->limit(4)->get() as $product)

                                            <div
                                                class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item cat-{{$product->category_id  }}">
                                                <div class="product-o product-o--hover-on product-o--radius">
                                                    <div class="product-o__wrap">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                           href="product-detail.html">

                                                            <img class="aspect__img"
                                                                 src="{{ asset($product->preview_image_path) }}"
                                                                 alt=""></a>
                                                        <div class="product-o__action-wrap">
                                                            <ul class="product-o__action-list">
                                                                <li>

                                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                                       data-tooltip="tooltip" data-placement="top"
                                                                       title="Xem chi tiết"><i
                                                                            class="fas fa-search-plus"></i></a></li>
                                                                <li>

                                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                                       data-tooltip="tooltip" data-placement="top"
                                                                       title="Thêm vào giỏ hàng"><i
                                                                            class="fas fa-plus-circle"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-o__category">

                                                    <a href="shop-side-version-2.html">{{ \App\Category::find($product->category_id)->name }}</a></span>

                                                    <span class="product-o__name">

                                                    <a href="product-detail.html">{{ $product->name }}</a></span>
                                                    <div class="product-o__rating gl-rating-style">

                                                        <span class="product-o__review"><i class="fas fa-eye"></i> {{ $product->views }}</span>
                                                    </div>

                                                    <span class="product-o__price">{{ $product->sale_price }} VND</span>
                                                </div>
                                            </div>

                                        @endforeach
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="load-more">

                                <button class="btn btn--e-brand" type="button">Xem thêm sản phẩm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->


        <!--====== Section 3 ======-->

        <!--====== End - Section 3 ======-->


        <!--====== Section 4 | Sản phẩm mới về ======-->
        <div class="u-s-p-b-60" id="new-products">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">SẢN PHẨM MỚI 🐞</h1>

                                <span class="section__span u-c-silver">🌷 HÀNG MỚI VỀ NÈ 🌷</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="slider-fouc">
                        <div class="owl-carousel product-slider" data-item="4">

                            @foreach($latest_products as $product)

                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                               href="product-detail.html">

                                                <img class="aspect__img" src="{{ asset($product->preview_image_path) }}"
                                                     alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look"
                                                           data-tooltip="tooltip" data-placement="top"
                                                           title="Xem chi tiết"><i class="fas fa-search-plus"></i></a>
                                                    </li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart"
                                                           data-tooltip="tooltip" data-placement="top"
                                                           title="Thêm vào giỏ hàng"><i class="fas fa-plus-circle"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">{{ \App\Category::find($product->category_id)->name }}</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">{{$product->name}}</a></span>
                                        <div class="product-o__rating gl-rating-style">
                                            <span class="product-o__review"><i class="far fa-eye"></i> {{$product->views}}</span>
                                        </div>

                                        <span class="product-o__price">{{ $product->sale_price }} VND</span>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 4 ======-->


        <!--====== Section 5 | Background ======-->
        <div class="banner-bg banner-modal-wrapper" style='background-image: url("{{ asset($background_image) }}")'>

            <!-- ===== Gray Modal ===== -->
            <div class="banner-modal"></div>

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-bg__wrap">
                                <div class="banner-bg__text-1">
                                    <span class="u-c-white">Shop Bạch Tuyết</span>
                                </div>
                                <div class="banner-bg__text-2">
                                    <span class="u-c-white">Mua ngay hôm nay</span>
                                </div>
                                <span class="banner-bg__text-block banner-bg__text-3 u-c-white">
                                    Cửa hàng bán quần áo uy tín số 1 Việt Nam
                                </span>

                                <a class="banner-bg__shop-now btn--e-white-brand" href="shop-side-version-2.html">
                                    Xem sản phẩm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 5 ======-->


        <!--====== Section 6 | Sản phẩm nổi bật ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">SẢN PHẨM NỔI BẬT 🍄</h1>

                                <span class="section__span u-c-silver">🍄 MUA HÀNG NỔI BẬT NGAY 🍄</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        @foreach($featured_products as $product)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="product-o product-o--hover-on u-h-100">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                           href="product-detail.html">

                                            <img class="aspect__img" src="{{ asset($product->preview_image_path) }}"
                                                 alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                       data-tooltip="tooltip" data-placement="top" title="Xem chi tiết"><i
                                                            class="fas fa-search-plus"></i></a></li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                       data-tooltip="tooltip" data-placement="top"
                                                       title="Thêm vào giỏ hàng"><i class="fas fa-plus-circle"></i></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">{{\App\Category::find($product->category_id)->name}}</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">{{$product->name}}</a></span>
                                    <div class="product-o__rating gl-rating-style">

                                        <span class="product-o__review"><i
                                                class="fas fa-eye"></i> {{$product->views}}</span>
                                    </div>

                                    <span class="product-o__price">{{$product->sale_price}} VND</span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 6 ======-->


        <!--====== Section 7 ======-->

        <!--====== End - Section 7 ======-->


        <!--====== Section 8 | Sản phẩm bán chạy ======-->
        <div class="u-s-p-b-60" id="top-selling-product">

            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">SẢN PHẨM BÁN CHẠY 🐬</h1>

                                <span class="section__span u-c-silver">🐬 MUA HÀNG NGAY 🐬</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                            <div class="column-product">

                                <span class="column-product__title u-c-secondary u-s-m-b-25">NGÀY 🍀</span>
                                <ul class="column-product__list">
                                    @foreach($best_seller_day as $product)
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                       href="product-detail.html">

                                                        <img class="aspect__img"
                                                             src="{{ asset($product->preview_image_path) }}"
                                                             alt=""></a></div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">{{\App\Category::find($product->category_id)->name}}</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">{{$product->name}}</a></span>

                                                    <span class="product-l__price">{{$product->sale_price}} VND</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                            <div class="column-product">

                                <span class="column-product__title u-c-secondary u-s-m-b-25">TUẦN 🍁</span>
                                <ul class="column-product__list">
                                    @foreach($best_seller_week as $product)
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                       href="product-detail.html">

                                                        <img class="aspect__img"
                                                             src="{{ asset($product->preview_image_path) }}"
                                                             alt=""></a></div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">{{\App\Category::find($product->category_id)->name}}</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">{{$product->name}}</a></span>

                                                    <span class="product-l__price">{{$product->sale_price}} VND</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                            <div class="column-product">

                                <span class="column-product__title u-c-secondary u-s-m-b-25">THÁNG 🥦</span>
                                <ul class="column-product__list">
                                    @foreach($best_seller_month as $product)
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                       href="product-detail.html">

                                                        <img class="aspect__img"
                                                             src="{{ asset($product->preview_image_path) }}"
                                                             alt=""></a></div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">{{\App\Category::find($product->category_id)->name}}</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">{{$product->name}}</a></span>

                                                    <span class="product-l__price">{{$product->sale_price}} VND</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 8 ======-->


        <!--====== Section 9 | Cam kết của cửa hàng ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon"><i class="fas fa-balance-scale"></i></div>
                                <div class="service__info-wrap">

                                    <span class="service__info-text-1">Uy tín</span>

                                    <span
                                        class="service__info-text-2">Sản phầm quần áo uy tín, chất lượng, có nguồn gốc xuất xứ rõ ràng</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon"><i class="fas fa-truck"></i></div>
                                <div class="service__info-wrap">

                                    <span class="service__info-text-1">Nhanh chóng</span>

                                    <span class="service__info-text-2">Giao hàng nhanh chóng, tận nơi, tiện lợi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon"><i class="fas fa-headphones-alt"></i></div>
                                <div class="service__info-wrap">

                                    <span class="service__info-text-1">Hỗ trợ khách hàng</span>

                                    <span class="service__info-text-2">Nhân viên hỗ trợ khách hàng 24/7, tận tâm, nhiệt tình</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 9 ======-->


        <!--====== Section 10 ======-->

        <!--====== End - Section 10 ======-->


        <!--====== Section 11 | Nhận xét của khách hàng ======-->
        <div class="u-s-p-b-90 u-s-m-b-30">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">KHÁCH HÀNG CỦA CHÚNG TÔI</h1>
                                <span
                                    class="section__span u-c-silver">NHỮNG ĐIỀU KHÁCH HÀNG NHẬN XÉT VỀ CHÚNG TÔI</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">

                    <!--====== Testimonial Slider ======-->
                    <div class="slider-fouc">
                        <div class="owl-carousel" id="testimonial-slider">
                            @foreach($feedbacks as $feedback)
                                <div class="testimonial">
                                    <div class="testimonial__img-wrap">

                                        <img class="testimonial__img" src="{{ asset($feedback->image_path) }}" alt="">
                                    </div>
                                    <div class="testimonial__content-wrap">

                                        <span class="testimonial__double-quote"><i
                                                class="fas fa-quote-right"></i></span>
                                        <blockquote class="testimonial__block-quote">
                                            <p>"{{ $feedback->content }}"</p>
                                        </blockquote>

                                        <span class="testimonial__author">{{ $feedback->author_info }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!--====== End - Testimonial Slider ======-->
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 11 ======-->


        <!--====== Section 12 | Logo hãng sản xuất ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">

                    <!--====== Brand Slider ======-->
                    <div class="slider-fouc">
                        <div class="owl-carousel" id="brand-slider" data-item="5">
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="{{ asset('frontend/images/brand/b1.png') }}" alt=""></a></div>
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="{{ asset('frontend/images/brand/b2.png') }}" alt=""></a></div>
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="{{ asset('frontend/images/brand/b3.png') }}" alt=""></a></div>
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="{{ asset('frontend/images/brand/b4.png') }}" alt=""></a></div>
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="{{ asset('frontend/images/brand/b5.png') }}" alt=""></a></div>
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="{{ asset('frontend/images/brand/b6.png') }}" alt=""></a></div>
                        </div>
                    </div>
                    <!--====== End - Brand Slider ======-->
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 12 ======-->
    </div>
    <!--====== End - App Content ======-->


    <!--====== Main Footer ======-->
    <footer id="footer">
        <div class="outer-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="outer-footer__content u-s-m-b-40">

                            <span class="outer-footer__content-title">Liên hệ chúng tôi</span>

                            @foreach($websiteconfig as $item)
                                @if($item->config_key=='ADDRESS')
                                    <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                        <span>{{$item->config_value}}</span></div>
                                @endif
                                @if($item->config_key=='PHONE_NUMBER')
                                    <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                        <span>(+0) {{$item->config_value}}</span></div>
                                @endif
                                @if($item->config_key=='EMAIL')
                                    <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                        <span>{{$item->config_value}}</span></div>
                                @endif
                                <div class="outer-footer__social">
                                    <ul>
                                        @if($item->config_key=='FACEBOOK')
                                            <li>
                                                <a class="s-fb--color-hover" href="{{$item->config_value}}">
                                                    <i style="width: 20px;" class="fab fa-facebook-f"></i>
                                                    <span>{{$item->config_value}}</span>
                                                </a>
                                            </li>
                                        @endif

                                        @if($item->config_key=='YOUTUBE')
                                            <li>

                                                <a class="s-youtube--color-hover" href="{{$item->config_value}}">
                                                    <i style="width: 20px;" class="fab fa-youtube"></i>
                                                    {{$item->config_value}}
                                                </a>
                                            </li>
                                        @endif
                                        @if($item->config_key=='INSTAGRAM')
                                            <li>

                                                <a class="s-insta--color-hover" href="{{$item->config_value}}">
                                                    <i style="width: 20px;" class="fab fa-instagram"></i>
                                                    {{$item->config_value}}
                                                </a>
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="lower-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="lower-footer__content">
                            <div class="lower-footer__copyright">
                                @foreach($websiteconfig as $item)
                                    @if($item->config_key == 'SHOP_NAME')
                                        <span>Bản quyền © 2021</span>

                                        <a href="index.html">{{$item->config_value}}</a>

                                        <span>có toàn quyền</span>
                                    @endif
                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--====== Modal Section ======-->


    <!--====== Quick Look Modal ======-->
    <div class="modal fade" id="quick-look">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal--shadow">

                <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5">

                            <!--====== Product Breadcrumb ======-->
                            <div class="pd-breadcrumb u-s-m-b-30">
                                <ul class="pd-breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="index.hml">Home</a></li>
                                    <li class="has-separator">

                                        <a href="shop-side-version-2.html">Electronics</a></li>
                                    <li class="has-separator">

                                        <a href="shop-side-version-2.html">DSLR Cameras</a></li>
                                    <li class="is-marked">

                                        <a href="shop-side-version-2.html">Nikon Cameras</a></li>
                                </ul>
                            </div>
                            <!--====== End - Product Breadcrumb ======-->


                            <!--====== Product Detail ======-->
                            <div class="pd u-s-m-b-30">
                                <div class="pd-wrap">
                                    <div id="js-product-detail-modal">
                                        <div>

                                            <img class="u-img-fluid"
                                                 src="{{ asset('frontend/images/product/product-d-1.jpg') }}" alt="">
                                        </div>
                                        <div>

                                            <img class="u-img-fluid"
                                                 src="{{ asset('frontend/images/product/product-d-2.jpg') }}" alt="">
                                        </div>
                                        <div>

                                            <img class="u-img-fluid"
                                                 src="{{ asset('frontend/images/product/product-d-3.jpg') }}" alt="">
                                        </div>
                                        <div>

                                            <img class="u-img-fluid"
                                                 src="{{ asset('frontend/images/product/product-d-4.jpg') }}" alt="">
                                        </div>
                                        <div>

                                            <img class="u-img-fluid"
                                                 src="{{ asset('frontend/images/product/product-d-5.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="u-s-m-t-15">
                                    <div id="js-product-detail-modal-thumbnail">
                                        <div>

                                            <img class="u-img-fluid"
                                                 src="{{ asset('frontend/images/product/product-d-1.jpg') }}" alt="">
                                        </div>
                                        <div>

                                            <img class="u-img-fluid"
                                                 src="{{ asset('frontend/images/product/product-d-2.jpg') }}" alt="">
                                        </div>
                                        <div>

                                            <img class="u-img-fluid"
                                                 src="{{ asset('frontend/images/product/product-d-3.jpg') }}" alt="">
                                        </div>
                                        <div>

                                            <img class="u-img-fluid"
                                                 src="{{ asset('frontend/images/product/product-d-4.jpg') }}" alt="">
                                        </div>
                                        <div>

                                            <img class="u-img-fluid"
                                                 src="{{ asset('frontend/images/product/product-d-5.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--====== End - Product Detail ======-->
                        </div>
                        <div class="col-lg-7">

                            <!--====== Product Right Side Details ======-->
                            <div class="pd-detail">
                                <div>

                                    <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span></div>
                                <div>
                                    <div class="pd-detail__inline">

                                        <span class="pd-detail__price">$6.99</span>

                                        <span class="pd-detail__discount">(76% OFF)</span>
                                        <del class="pd-detail__del">$28.97</del>
                                    </div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                        <span class="pd-detail__review u-s-m-l-4">

                                                <a href="product-detail.html">23 Reviews</a></span></div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline">

                                        <span class="pd-detail__stock">200 in stock</span>

                                        <span class="pd-detail__left">Only 2 left</span></div>
                                </div>
                                <div class="u-s-m-b-15">

                                    <span class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                                </div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                <a href="signin.html">Add to Wishlist</a>

                                                <span class="pd-detail__click-count">(222)</span></span></div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i
                                                    class="far fa-envelope u-s-m-r-6"></i>

                                                <a href="signin.html">Email me When the price drops</a>

                                                <span class="pd-detail__click-count">(20)</span></span></div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <ul class="pd-social-list">
                                        <li>

                                            <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-insta--color-hover" href="#"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li>

                                            <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-gplus--color-hover" href="#"><i
                                                    class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                                <div class="u-s-m-b-15">
                                    <form class="pd-detail__form">
                                        <div class="pd-detail-inline-2">
                                            <div class="u-s-m-b-15">

                                                <!--====== Input Counter ======-->
                                                <div class="input-counter">

                                                    <span class="input-counter__minus fas fa-minus"></span>

                                                    <input class="input-counter__text input-counter--text-primary-style"
                                                           type="text" value="1" data-min="1" data-max="1000">

                                                    <span class="input-counter__plus fas fa-plus"></span></div>
                                                <!--====== End - Input Counter ======-->
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <button class="btn btn--e-brand-b-2" type="submit">Add to Cart</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="u-s-m-b-15">

                                    <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                    <ul class="pd-detail__policy-list">
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                            <span>Buyer Protection.</span></li>
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                            <span>Full Refund if you don't receive your order.</span></li>
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                            <span>Returns accepted if product not as described.</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!--====== End - Product Right Side Details ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Quick Look Modal ======-->


    <!--====== Add to Cart Modal ======-->
    <div class="modal fade" id="add-to-cart">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-radius modal-shadow">

                <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="success u-s-m-b-30">
                                <div class="success__text-wrap"><i class="fas fa-check"></i>

                                    <span>Item is added successfully!</span></div>
                                <div class="success__img-wrap">

                                    <img class="u-img-fluid"
                                         src="{{ asset('frontend/images/product/electronic/product1.jpg') }}" alt="">
                                </div>
                                <div class="success__info-wrap">

                                    <span class="success__name">Beats Bomb Wireless Headphone</span>

                                    <span class="success__quantity">Quantity: 1</span>

                                    <span class="success__price">$170.00</span></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="s-option">

                                <span class="s-option__text">1 item (s) in your cart</span>
                                <div class="s-option__link-box">

                                    <a class="s-option__link btn--e-white-brand-shadow" data-dismiss="modal">CONTINUE
                                        SHOPPING</a>

                                    <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW CART</a>

                                    <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED TO
                                        CHECKOUT</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Add to Cart Modal ======-->


    <!--====== Newsletter Subscribe Modal ======-->

    <!--====== End - Newsletter Subscribe Modal ======-->
    <!--====== End - Modal Section ======-->
</div>
<!--====== End - Main App ======-->


<!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>

<!--====== Vendor Js ======-->
<script src="{{ asset('frontend/js/vendor.js') }}"></script>

<!--====== jQuery Shopnav plugin ======-->
<script src="{{ asset('frontend/js/jquery.shopnav.js') }}"></script>

<!--====== App ======-->
<script src="{{ asset('frontend/js/app.js') }}"></script>

<script>
    // self executing function here
    (function () {
        const filterItems = Array.from(document.querySelectorAll('.filter__item'));
        const heights = filterItems.map(i => i.clientHeight);
        const maxHeight = Math.max(...heights);

        filterItems.forEach(item => item.setAttribute('style', `${item.getAttribute('style')} height: ${maxHeight}px;`));

        document.getElementById('cat-2').click();
        document.getElementById('cat-all').click();
    })();
</script>

<!--====== Noscript ======-->
<noscript>
    <div class="app-setting">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="app-setting__wrap">
                        <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                        <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</noscript>
</body>
</html>
