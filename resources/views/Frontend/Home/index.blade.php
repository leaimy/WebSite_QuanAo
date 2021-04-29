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

                        <img src="{{ asset('frontend/images/logo/logo-1.png') }}" alt=""></a>
                    <!--====== End - Main Logo ======-->


                    <!--====== Search Form ======-->
                    <form class="main-form">

                        <label for="main-search"></label>

                        <input class="input-text input-text--border-radius input-text--style-1" type="text"
                               id="main-search" placeholder="Search">

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
                                <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

                                    <a><i class="far fa-user-circle"></i></a>

                                    <!--====== Dropdown ======-->

                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:120px">
                                        <li>

                                            <a href="dashboard.html"><i class="fas fa-user-circle u-s-m-r-6"></i>

                                                <span>Account</span></a></li>
                                        <li>

                                            <a href="signup.html"><i class="fas fa-user-plus u-s-m-r-6"></i>

                                                <span>Signup</span></a></li>
                                        <li>

                                            <a href="signin.html"><i class="fas fa-lock u-s-m-r-6"></i>

                                                <span>Signin</span></a></li>
                                        <li>

                                            <a href="signup.html"><i class="fas fa-lock-open u-s-m-r-6"></i>

                                                <span>Signout</span></a></li>
                                    </ul>
                                    <!--====== End - Dropdown ======-->
                                </li>
                                <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Settings">

                                    <a><i class="fas fa-user-cog"></i></a>

                                    <!--====== Dropdown ======-->

                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:120px">
                                        <li class="has-dropdown has-dropdown--ul-right-100">

                                            <a>Language<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:120px">
                                                <li>

                                                    <a class="u-c-brand">ENGLISH</a></li>
                                                <li>

                                                    <a>ARABIC</a></li>
                                                <li>

                                                    <a>FRANCAIS</a></li>
                                                <li>

                                                    <a>ESPANOL</a></li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li class="has-dropdown has-dropdown--ul-right-100">

                                            <a>Currency<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:225px">
                                                <li>

                                                    <a class="u-c-brand">$ - US DOLLAR</a></li>
                                                <li>

                                                    <a>£ - BRITISH POUND STERLING</a></li>
                                                <li>

                                                    <a>€ - EURO</a></li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                    </ul>
                                    <!--====== End - Dropdown ======-->
                                </li>
                                <li data-tooltip="tooltip" data-placement="left" title="Contact">

                                    <a href="tel:+0900901904"><i class="fas fa-phone-volume"></i></a></li>
                                <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                    <a href="mailto:contact@domain.com"><i class="far fa-envelope"></i></a></li>
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
                            <ul class="ah-list">
                                <li class="has-dropdown">

                                    <span class="mega-text">M</span>

                                    <!--====== Mega Menu ======-->

                                    <span class="js-menu-toggle"></span>
                                    <div class="mega-menu">
                                        <div class="mega-menu-wrap">
                                            <div class="mega-menu-list">
                                                <ul>
                                                    <li class="js-active">

                                                        <a href="shop-side-version-2.html"><i
                                                                class="fas fa-tv u-s-m-r-6"></i>

                                                            <span>Electronics</span></a>

                                                        <span class="js-menu-toggle js-toggle-mark"></span></li>
                                                    <li>

                                                        <a href="shop-side-version-2.html"><i
                                                                class="fas fa-female u-s-m-r-6"></i>

                                                            <span>Women's Clothing</span></a>

                                                        <span class="js-menu-toggle"></span></li>
                                                    <li>

                                                        <a href="shop-side-version-2.html"><i
                                                                class="fas fa-male u-s-m-r-6"></i>

                                                            <span>Men's Clothing</span></a>

                                                        <span class="js-menu-toggle"></span></li>
                                                    <li>

                                                        <a href="index.html"><i class="fas fa-utensils u-s-m-r-6"></i>

                                                            <span>Food & Supplies</span></a>

                                                        <span class="js-menu-toggle"></span></li>
                                                    <li>

                                                        <a href="index.html"><i class="fas fa-couch u-s-m-r-6"></i>

                                                            <span>Furniture & Decor</span></a>

                                                        <span class="js-menu-toggle"></span></li>
                                                    <li>

                                                        <a href="index.html"><i
                                                                class="fas fa-football-ball u-s-m-r-6"></i>

                                                            <span>Sports & Game</span></a>

                                                        <span class="js-menu-toggle"></span></li>
                                                    <li>

                                                        <a href="index.html"><i class="fas fa-heartbeat u-s-m-r-6"></i>

                                                            <span>Beauty & Health</span></a>

                                                        <span class="js-menu-toggle"></span></li>
                                                </ul>
                                            </div>

                                            <!--====== Electronics ======-->
                                            <div class="mega-menu-content js-active">

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">3D PRINTER &
                                                                    SUPPLIES</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">3d Printer</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">3d Printing Pen</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">3d Printing
                                                                    Accessories</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">3d Printer Module
                                                                    Board</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">HOME AUDIO &
                                                                    VIDEO</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">TV Boxes</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">TC Receiver &
                                                                    Accessories</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Display Dongle</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Home Theater
                                                                    System</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">MEDIA PLAYERS</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Earphones</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Mp3 Players</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Speakers & Radios</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Microphones</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">VIDEO GAME
                                                                    ACCESSORIES</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Nintendo Video Games
                                                                    Accessories</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Sony Video Games
                                                                    Accessories</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Xbox Video Games
                                                                    Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">SECURITY &
                                                                    PROTECTION</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Security Cameras</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Alarm System</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Security Gadgets</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">CCTV Security &
                                                                    Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">PHOTOGRAPHY &
                                                                    CAMERA</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Digital Cameras</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Sport Camera &
                                                                    Accessories</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Camera
                                                                    Accessories</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Lenses &
                                                                    Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">ARDUINO
                                                                    COMPATIBLE</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Raspberry Pi & Orange
                                                                    Pi</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Module Board</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Smart Robot</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Board Kits</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">DSLR Camera</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Nikon Cameras</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Canon Camera</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Sony Camera</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">DSLR Lenses</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">NECESSARY
                                                                    ACCESSORIES</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Flash Cards</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Memory Cards</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Flash Pins</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Compact Discs</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-9 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="shop-side-version-2.html">

                                                                <img class="u-img-fluid u-d-block"
                                                                     src="{{ asset('frontend/images/banners/banner-mega-0.jpg') }}"
                                                                     alt=""></a></div>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                            </div>
                                            <!--====== End - Electronics ======-->


                                            <!--====== Women ======-->
                                            <div class="mega-menu-content">

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-6 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="shop-side-version-2.html">

                                                                <img class="u-img-fluid u-d-block"
                                                                     src="{{ asset('frontend/images/banners/banner-mega-1.jpg') }}"
                                                                     alt=""></a></div>
                                                    </div>
                                                    <div class="col-lg-6 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="shop-side-version-2.html">

                                                                <img class="u-img-fluid u-d-block"
                                                                     src="{{ asset('frontend/images/banners/banner-mega-2.jpg') }}"
                                                                     alt=""></a></div>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">HOT CATEGORIES</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Dresses</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Blouses & Shirts</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">T-shirts</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Rompers</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">INTIMATES</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Bras</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Brief Sets</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Bustiers &
                                                                    Corsets</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Panties</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">WEDDING & EVENTS</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Wedding Dresses</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Evening Dresses</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Prom Dresses</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Flower Dresses</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">BOTTOMS</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Skirts</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Shorts</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Leggings</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Jeans</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">OUTWEAR</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Blazers</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Basics Jackets</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Trench</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Leather & Suede</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">JACKETS</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Denim Jackets</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Trucker Jackets</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Windbreaker
                                                                    Jackets</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Leather Jackets</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">ACCESSORIES</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Tech Accessories</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Headwear</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Baseball Caps</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Belts</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">OTHER ACCESSORIES</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Bags</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Wallets</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Watches</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Sunglasses</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-9 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="shop-side-version-2.html">

                                                                <img class="u-img-fluid u-d-block"
                                                                     src="{{ asset('frontend/images/banners/banner-mega-3.jpg') }}"
                                                                     alt=""></a></div>
                                                    </div>
                                                    <div class="col-lg-3 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="shop-side-version-2.html">

                                                                <img class="u-img-fluid u-d-block"
                                                                     src="{{ asset('frontend/images/banners/banner-mega-4.jpg') }}"
                                                                     alt=""></a></div>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                            </div>
                                            <!--====== End - Women ======-->


                                            <!--====== Men ======-->
                                            <div class="mega-menu-content">

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-4 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="shop-side-version-2.html">

                                                                <img class="u-img-fluid u-d-block"
                                                                     src="{{ asset('frontend/images/banners/banner-mega-5.jpg') }}"
                                                                     alt=""></a></div>
                                                    </div>
                                                    <div class="col-lg-4 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="shop-side-version-2.html">

                                                                <img class="u-img-fluid u-d-block"
                                                                     src="{{ asset('frontend/images/banners/banner-mega-6.jpg') }}"
                                                                     alt=""></a></div>
                                                    </div>
                                                    <div class="col-lg-4 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="shop-side-version-2.html">

                                                                <img class="u-img-fluid u-d-block"
                                                                     src="{{ asset('frontend/images/banners/banner-mega-7.jpg') }}"
                                                                     alt=""></a></div>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">HOT SALE</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">T-Shirts</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Tank Tops</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Polo</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Shirts</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">OUTWEAR</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Hoodies</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Trench</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Parkas</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Sweaters</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">BOTTOMS</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Casual Pants</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Cargo Pants</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Jeans</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Shorts</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">UNDERWEAR</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Boxers</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Briefs</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Robes</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Socks</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">JACKETS</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Denim Jackets</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Trucker Jackets</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Windbreaker
                                                                    Jackets</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Leather Jackets</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">SUNGLASSES</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Pilot</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Wayfarer</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Square</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Round</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">ACCESSORIES</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Eyewear Frames</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Scarves</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Hats</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Belts</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="shop-side-version-2.html">OTHER ACCESSORIES</a>
                                                            </li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Bags</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Wallets</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Watches</a></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html">Tech Accessories</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-6 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="shop-side-version-2.html">

                                                                <img class="u-img-fluid u-d-block"
                                                                     src="{{ asset('frontend/images/banners/banner-mega-8.jpg') }}"
                                                                     alt=""></a></div>
                                                    </div>
                                                    <div class="col-lg-6 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="shop-side-version-2.html">

                                                                <img class="u-img-fluid u-d-block"
                                                                     src="{{ asset('frontend/images/banners/banner-mega-9.jpg') }}"
                                                                     alt=""></a></div>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                            </div>
                                            <!--====== End - Men ======-->


                                            <!--====== No Sub Categories ======-->
                                            <div class="mega-menu-content">
                                                <h5>No Categories</h5>
                                            </div>
                                            <!--====== End - No Sub Categories ======-->


                                            <!--====== No Sub Categories ======-->
                                            <div class="mega-menu-content">
                                                <h5>No Categories</h5>
                                            </div>
                                            <!--====== End - No Sub Categories ======-->


                                            <!--====== No Sub Categories ======-->
                                            <div class="mega-menu-content">
                                                <h5>No Categories</h5>
                                            </div>
                                            <!--====== End - No Sub Categories ======-->


                                            <!--====== No Sub Categories ======-->
                                            <div class="mega-menu-content">
                                                <h5>No Categories</h5>
                                            </div>
                                            <!--====== End - No Sub Categories ======-->
                                        </div>
                                    </div>
                                    <!--====== End - Mega Menu ======-->
                                </li>
                            </ul>
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

                                    <a href="shop-side-version-2.html">NEW ARRIVALS</a></li>
                                <li class="has-dropdown">

                                    <a>PAGES<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                    <!--====== Dropdown ======-->

                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:170px">
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a>Home<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:118px">
                                                <li>

                                                    <a href="index.html">Home 1</a></li>
                                                <li>

                                                    <a href="index-2.html">Home 2</a></li>
                                                <li>

                                                    <a href="index-3.html">Home 3</a></li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a>Account<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:200px">
                                                <li>

                                                    <a href="signin.html">Signin / Already Registered</a></li>
                                                <li>

                                                    <a href="signup.html">Signup / Register</a></li>
                                                <li>

                                                    <a href="lost-password.html">Lost Password</a></li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a href="dashboard.html">Dashboard<i
                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:200px">
                                                <li class="has-dropdown has-dropdown--ul-left-100">

                                                    <a href="dashboard.html">Manage My Account<i
                                                            class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                    <!--====== Dropdown ======-->

                                                    <span class="js-menu-toggle"></span>
                                                    <ul style="width:180px">
                                                        <li>

                                                            <a href="dash-edit-profile.html">Edit Profile</a></li>
                                                        <li>

                                                            <a href="dash-address-book.html">Edit Address Book</a></li>
                                                        <li>

                                                            <a href="dash-manage-order.html">Manage Order</a></li>
                                                    </ul>
                                                    <!--====== End - Dropdown ======-->
                                                </li>
                                                <li>

                                                    <a href="dash-my-profile.html">My Profile</a></li>
                                                <li class="has-dropdown has-dropdown--ul-left-100">

                                                    <a href="dash-address-book.html">Address Book<i
                                                            class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                    <!--====== Dropdown ======-->

                                                    <span class="js-menu-toggle"></span>
                                                    <ul style="width:180px">
                                                        <li>

                                                            <a href="dash-address-make-default.html">Address Make
                                                                Default</a></li>
                                                        <li>

                                                            <a href="dash-address-add.html">Add New Address</a></li>
                                                        <li>

                                                            <a href="dash-address-edit.html">Edit Address Book</a></li>
                                                    </ul>
                                                    <!--====== End - Dropdown ======-->
                                                </li>
                                                <li>

                                                    <a href="dash-track-order.html">Track Order</a></li>
                                                <li>

                                                    <a href="dash-my-order.html">My Orders</a></li>
                                                <li>

                                                    <a href="dash-payment-option.html">My Payment Options</a></li>
                                                <li>

                                                    <a href="dash-cancellation.html">My Returns & Cancellations</a></li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a>Empty<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:200px">
                                                <li>

                                                    <a href="empty-search.html">Empty Search</a></li>
                                                <li>

                                                    <a href="empty-cart.html">Empty Cart</a></li>
                                                <li>

                                                    <a href="empty-wishlist.html">Empty Wishlist</a></li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a>Product Details<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:200px">
                                                <li>

                                                    <a href="product-detail.html">Product Details</a></li>
                                                <li>

                                                    <a href="product-detail-variable.html">Product Details Variable</a>
                                                </li>
                                                <li>

                                                    <a href="product-detail-affiliate.html">Product Details
                                                        Affiliate</a></li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a>Shop Grid Layout<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:200px">
                                                <li>

                                                    <a href="shop-grid-left.html">Shop Grid Left Sidebar</a></li>
                                                <li>

                                                    <a href="shop-grid-right.html">Shop Grid Right Sidebar</a></li>
                                                <li>

                                                    <a href="shop-grid-full.html">Shop Grid Full Width</a></li>
                                                <li>

                                                    <a href="shop-side-version-2.html">Shop Side Version 2</a></li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a>Shop List Layout<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:200px">
                                                <li>

                                                    <a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                <li>

                                                    <a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                                <li>

                                                    <a href="shop-list-full.html">Shop List Full Width</a></li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li>

                                            <a href="cart.html">Cart</a></li>
                                        <li>

                                            <a href="wishlist.html">Wishlist</a></li>
                                        <li>

                                            <a href="checkout.html">Checkout</a></li>
                                        <li>

                                            <a href="faq.html">FAQ</a></li>
                                        <li>

                                            <a href="about.html">About us</a></li>
                                        <li>

                                            <a href="contact.html">Contact</a></li>
                                        <li>

                                            <a href="404.html">404</a></li>
                                    </ul>
                                    <!--====== End - Dropdown ======-->
                                </li>
                                <li class="has-dropdown">

                                    <a>BLOG<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                    <!--====== Dropdown ======-->

                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:200px">
                                        <li>

                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li>

                                            <a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li>

                                            <a href="blog-sidebar-none.html">Blog Sidebar None</a></li>
                                        <li>

                                            <a href="blog-masonry.html">Blog Masonry</a></li>
                                        <li>

                                            <a href="blog-detail.html">Blog Details</a></li>
                                    </ul>
                                    <!--====== End - Dropdown ======-->
                                </li>
                                <li>

                                    <a href="shop-side-version-2.html">VALUE OF THE DAY</a></li>
                                <li>

                                    <a href="shop-side-version-2.html">GIFT CARDS</a></li>
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
                                <li>

                                    <a href="wishlist.html"><i class="far fa-heart"></i></a></li>
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
                                    <div class="slider-content slider-content--animation">

                                        <span class="content-span-1 u-c-secondary">{{ $slider->title }}</span>

                                        <span class="content-span-2 u-c-secondary">30% Off On Electronics</span>

                                        <span class="content-span-3 u-c-secondary">{{ $slider->content }}</span>

                                        <span class="content-span-4 u-c-secondary">Starting At

                                            <span class="u-c-brand">$1050.00</span></span>

                                        <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">SHOP
                                            NOW</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach

            <!--
                <div class="hero-slide hero-slide--1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider-content slider-content--animation">

                                    <span class="content-span-1 u-c-secondary">Latest Update Stock</span>

                                    <span class="content-span-2 u-c-secondary">30% Off On Electronics</span>

                                    <span class="content-span-3 u-c-secondary">Find electronics on best prices, Also Discover most selling products of electronics</span>

                                    <span class="content-span-4 u-c-secondary">Starting At

                                            <span class="u-c-brand">$1050.00</span></span>

                                    <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">SHOP NOW</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide hero-slide--2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider-content slider-content--animation">

                                    <span class="content-span-1 u-c-white">Find Top Brands</span>

                                    <span class="content-span-2 u-c-white">10% Off On Electronics</span>

                                    <span class="content-span-3 u-c-white">Find electronics on best prices, Also Discover most selling products of electronics</span>

                                    <span class="content-span-4 u-c-white">Starting At

                                            <span class="u-c-brand">$380.00</span></span>

                                    <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">SHOP NOW</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide hero-slide--3">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider-content slider-content--animation">

                                    <span class="content-span-1 u-c-secondary">Find Top Brands</span>

                                    <span class="content-span-2 u-c-secondary">10% Off On Electronics</span>

                                    <span class="content-span-3 u-c-secondary">Find electronics on best prices, Also Discover most selling products of electronics</span>

                                    <span class="content-span-4 u-c-secondary">Starting At

                                            <span class="u-c-brand">$550.00</span></span>

                                    <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">SHOP NOW</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                -->

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
                        @for($i=0;$i<4;$i++)
                            @if($i==0 or $i==3)
                                <div class="col-lg-5 col-md-5 u-s-m-b-30">

                                    <a class="collection" href="shop-side-version-2.html">
                                        <div class="aspect aspect--bg-grey aspect--square">

                                            <img class="aspect__img collection__img"
                                                 src="{{ asset($products[$i]->preview_image_path) }}" alt=""></div>
                                    </a></div>
                            @else
                                <div class="col-lg-7 col-md-7 u-s-m-b-30">

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
        <div class="u-s-p-b-60">

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

                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item cat-{{$product->category_id  }}">
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
                                                                       title="Quick View"><i
                                                                            class="fas fa-search-plus"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                                       data-tooltip="tooltip" data-placement="top"
                                                                       title="Add to Cart"><i
                                                                            class="fas fa-plus-circle"></i></a></li>
                                                                <li>

                                                                    <a href="signin.html" data-tooltip="tooltip"
                                                                       data-placement="top" title="Add to Wishlist"><i
                                                                            class="fas fa-heart"></i></a></li>
                                                                <li>

                                                                    <a href="signin.html" data-tooltip="tooltip"
                                                                       data-placement="top"
                                                                       title="Email me When the price drops"><i
                                                                            class="fas fa-envelope"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-o__category">

                                                    <a href="shop-side-version-2.html">{{ \App\Category::find($product->category_id)->name }}</a></span>

                                                    <span class="product-o__name">

                                                    <a href="product-detail.html">{{ $product->name }}</a></span>
                                                    <div class="product-o__rating gl-rating-style">

                                                        <span class="product-o__review"><i class="fas fa-eye"></i> {{ $product->views }}</span></div>

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
        <div class="u-s-p-b-60">

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
                                                           title="Quick View"><i class="fas fa-search-plus"></i></a>
                                                    </li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart"
                                                           data-tooltip="tooltip" data-placement="top"
                                                           title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                    </li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip"
                                                           data-placement="top" title="Add to Wishlist"><i
                                                                class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip"
                                                           data-placement="top" title="Email me When the price drops"><i
                                                                class="fas fa-envelope"></i></a></li>
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
        <div class="banner-bg" style='background-image: url("{{ asset($background_image) }}")'>

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-bg__countdown">
                                <div class="countdown countdown--style-banner" data-countdown="2020/05/01"></div>
                            </div>
                            <div class="banner-bg__wrap">
                                <div class="banner-bg__text-1">

                                    <span class="u-c-white">Global</span>

                                    <span class="u-c-secondary">Offers</span></div>
                                <div class="banner-bg__text-2">

                                    <span class="u-c-secondary">Official Launch</span>

                                    <span class="u-c-white">Don't Miss!</span></div>

                                <span class="banner-bg__text-block banner-bg__text-3 u-c-secondary">Enjoy Free Shipping when you buy 2 items and above!</span>

                                <a class="banner-bg__shop-now btn--e-secondary" href="shop-side-version-2.html">Shop
                                    Now</a>
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
                                                       data-tooltip="tooltip" data-placement="top" title="Quick View"><i
                                                            class="fas fa-search-plus"></i></a></li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                       data-tooltip="tooltip" data-placement="top"
                                                       title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                       title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                       title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a></li>
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
        <div class="u-s-p-b-60">

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
                                <div class="service__icon"><i class="fas fa-truck"></i></div>
                                <div class="service__info-wrap">

                                    <span class="service__info-text-1">Free Shipping</span>

                                    <span
                                        class="service__info-text-2">Free shipping on all US order or order above $200</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon"><i class="fas fa-redo"></i></div>
                                <div class="service__info-wrap">

                                    <span class="service__info-text-1">Shop with Confidence</span>

                                    <span class="service__info-text-2">Our Protection covers your purchase from click to delivery</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon"><i class="fas fa-headphones-alt"></i></div>
                                <div class="service__info-wrap">

                                    <span class="service__info-text-1">24/7 Help Center</span>

                                    <span class="service__info-text-2">Round-the-clock assistance for a smooth shopping experience</span>
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
    <footer>
        <div class="outer-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="outer-footer__content u-s-m-b-40">

                            <span class="outer-footer__content-title">Contact Us</span>
                            <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                <span>4247 Ashford Drive Virginia VA-20006 USA</span></div>
                            <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                <span>(+0) 900 901 904</span></div>
                            <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                <span>contact@domain.com</span></div>
                            <div class="outer-footer__social">
                                <ul>
                                    <li>

                                        <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li>

                                        <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li>

                                        <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-gplus--color-hover" href="#"><i
                                                class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="outer-footer__content u-s-m-b-40">

                                    <span class="outer-footer__content-title">Information</span>
                                    <div class="outer-footer__list-wrap">
                                        <ul>
                                            <li>

                                                <a href="cart.html">Cart</a></li>
                                            <li>

                                                <a href="dashboard.html">Account</a></li>
                                            <li>

                                                <a href="shop-side-version-2.html">Manufacturer</a></li>
                                            <li>

                                                <a href="dash-payment-option.html">Finance</a></li>
                                            <li>

                                                <a href="shop-side-version-2.html">Shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="outer-footer__content u-s-m-b-40">
                                    <div class="outer-footer__list-wrap">

                                        <span class="outer-footer__content-title">Our Company</span>
                                        <ul>
                                            <li>

                                                <a href="about.html">About us</a></li>
                                            <li>

                                                <a href="contact.html">Contact Us</a></li>
                                            <li>

                                                <a href="index.html">Sitemap</a></li>
                                            <li>

                                                <a href="dash-my-order.html">Delivery</a></li>
                                            <li>

                                                <a href="shop-side-version-2.html">Store</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="outer-footer__content">

                            <span class="outer-footer__content-title">Join our Newsletter</span>
                            <form class="newsletter">
                                <div class="u-s-m-b-15">
                                    <div class="radio-box newsletter__radio">

                                        <input type="radio" id="male" name="gender">
                                        <div class="radio-box__state radio-box__state--primary">

                                            <label class="radio-box__label" for="male">Male</label></div>
                                    </div>
                                    <div class="radio-box newsletter__radio">

                                        <input type="radio" id="female" name="gender">
                                        <div class="radio-box__state radio-box__state--primary">

                                            <label class="radio-box__label" for="female">Female</label></div>
                                    </div>
                                </div>
                                <div class="newsletter__group">

                                    <label for="newsletter"></label>

                                    <input class="input-text input-text--only-white" type="text" id="newsletter"
                                           placeholder="Enter your Email">

                                    <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button>
                                </div>

                                <span class="newsletter__text">Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.</span>
                            </form>
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

                                <span>Copyright © 2018</span>

                                <a href="index.html">Reshop</a>

                                <span>All Right Reserved</span></div>
                            <div class="lower-footer__payment">
                                <ul>
                                    <li><i class="fab fa-cc-stripe"></i></li>
                                    <li><i class="fab fa-cc-paypal"></i></li>
                                    <li><i class="fab fa-cc-mastercard"></i></li>
                                    <li><i class="fab fa-cc-visa"></i></li>
                                    <li><i class="fab fa-cc-discover"></i></li>
                                    <li><i class="fab fa-cc-amex"></i></li>
                                </ul>
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
    (function() {
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
