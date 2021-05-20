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
    <title>@yield('title')</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor.css') }}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('frontend/css/utility.css') }}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('frontend/css/app.css') }}">

    @yield('style')
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

                    <a class="main-logo" href="{{ route('frontend.index') }}">
                        @foreach($websiteconfig as $item)
                            @if($item->config_key=='LOGO_IMAGE')
                                <img src="{{ asset($item->config_value) }}" alt="">
                            @endif
                        @endforeach
                    </a>
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
                                    <ul style="width:200px">
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
                                    <a href="@if(url()->current() === route('frontend.index')) #product-trending @else {{ route('frontend.index') . '#product-trending' }} @endif">XU HƯỚNG</a>
                                </li>

                                <li>
                                    <a href="@if(url()->current() === route('frontend.index')) #new-products @else {{ route('frontend.index') . '#new-products' }} @endif">SẢN PHẨM MỚI</a>
                                </li>

                                <li>
                                    <a href="@if(url()->current() === route('frontend.index')) #top-selling-product @else {{ route('frontend.index') . '#top-selling-product' }} @endif">SẢN PHẨM BÁN CHẠY</a>
                                </li>

                                @foreach($parent_categories as $parent_category)

                                    @if (\App\Category::where('parent_id', $parent_category->id)->count() > 0)
                                        <li class="has-dropdown">

                                            <a>{{ mb_convert_case($parent_category->name, MB_CASE_UPPER, "UTF-8") }} <i
                                                    class="fas fa-angle-down u-s-m-l-6"></i></a>

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

                                        <span class="total-item-round" id="mini-cart-item-count">0</span></a>

                                    <!--====== Dropdown ======-->

                                    <span class="js-menu-toggle"></span>
                                    <div class="mini-cart" id="mini-cart-box">

                                        <!--====== Mini Product Container ======-->
                                        <div id="mini-product-container"
                                             class="mini-product-container gl-scroll u-s-m-b-15">


                                        </div>
                                        <!--====== End - Mini Product Container ======-->


                                        <!--====== Mini Product Statistics ======-->
                                        <div class="mini-product-stat" id="mini-cart-statistic-box">
                                            <div class="mini-total">

                                                <span class="subtotal-text">THÀNH TIỀN</span>

                                                <span class="subtotal-value"><span
                                                        id="mini-cart-subtotal"></span> VND</span></div>
                                            <div class="mini-action">

                                                <a class="mini-link btn--e-brand-b-2" href="checkout.html">THANH
                                                    TOÁN</a>

                                                <a class="mini-link btn--e-transparent-secondary-b-2" href="cart.html">XEM
                                                    GIỎ HÀNG</a></div>
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
        @yield('content')
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

                                        <span>{{$item->config_value}}</span></div>
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
                                                    Facebook
                                                </a>
                                            </li>
                                        @endif

                                        @if($item->config_key=='YOUTUBE')
                                            <li>

                                                <a class="s-youtube--color-hover" href="{{$item->config_value}}">
                                                    <i style="width: 20px;" class="fab fa-youtube"></i>
                                                    Youtube
                                                </a>
                                            </li>
                                        @endif
                                        @if($item->config_key=='INSTAGRAM')
                                            <li>

                                                <a class="s-insta--color-hover" href="{{$item->config_value}}">
                                                    <i style="width: 20px;" class="fab fa-instagram"></i>
                                                    Instagram
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

</div>
<!--====== End - Main App ======-->

<!--====== Vendor Js ======-->
<script src="{{ asset('frontend/js/vendor.js') }}"></script>

<!--====== jQuery Shopnav plugin ======-->
<script src="{{ asset('frontend/js/jquery.shopnav.js') }}"></script>

<!--====== App ======-->
<script src="{{ asset('frontend/js/app.js') }}"></script>

@yield('script')

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
