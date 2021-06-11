@extends('Frontend.app')

@section('title')
    Shop Bạch Tuyết 🐇 | Cửa hàng quần áo số 1 Việt Nam
@endsection

@section('style')
    <!--===== Custom ====-->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
@endsection

@section('script')
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

    <!--===== Cart ====-->
    <script src="{{ asset('frontend/js/cart.js') }}"></script>
@endsection

@section('content')
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
                    <div class="col-lg-4 col-md-4 u-s-m-b-30">

                        <a class="collection" href="shop-side-version-2.html">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img collection__img"
                                     src="{{ asset('images/anhbia/category_sua.jpg') }}" alt=""></div>
                        </a>
                    </div>
                    <div  class="col-lg-4 col-md-4 u-s-m-b-30">

                        <a class="collection" href="shop-side-version-2.html">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img collection__img"
                                     src="{{ asset('images/anhbia/category2_sua.jpg') }}" alt=""></div>
                        </a>
                    </div>
                    <div  class="col-lg-4 col-md-4 u-s-m-b-30">

                        <a class="collection" href="shop-side-version-2.html">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img collection__img"
                                     src="{{ asset('images/anhbia/category3_sua.jpg') }}" alt=""></div>
                        </a>
                    </div>

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
                                                       href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">

                                                        <img class="aspect__img"
                                                             src="{{ asset($product->preview_image_path) }}"
                                                             alt=""></a>
                                                </div>

                                                <span class="product-o__category">

                                                <a href="shop-side-version-2.html">{{ \App\Category::find($product->category_id)->name }}</a></span>

                                                <span class="product-o__name">

                                                <a href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">{{ $product->name }}</a></span>
                                                <div class="product-o__rating gl-rating-style">

                                                    <span class="product-o__review"><i class="fas fa-eye"></i> {{ $product->views }}</span>
                                                </div>

                                                <span class="product-o__price">{{number_format($product->sale_price,0,'','.')}} VNĐ</span>
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
                                           href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">

                                            <img class="aspect__img" src="{{ asset($product->preview_image_path) }}"
                                                 alt=""></a>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">{{ \App\Category::find($product->category_id)->name }}</a></span>

                                    <span class="product-o__name">

                                        <a href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">{{$product->name}}</a></span>
                                    <div class="product-o__rating gl-rating-style">
                                        <span class="product-o__review"><i class="far fa-eye"></i> {{$product->views}}</span>
                                    </div>

                                    <span class="product-o__price">{{number_format($product->sale_price,0,'','.')}} VNĐ</span>
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
                                       href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">

                                        <img class="aspect__img" src="{{ asset($product->preview_image_path) }}"
                                             alt=""></a>
                                </div>

                                <span class="product-o__category">

                                    <a href="shop-side-version-2.html">{{\App\Category::find($product->category_id)->name}}</a></span>

                                <span class="product-o__name">

                                    <a href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">{{$product->name}}</a></span>
                                <div class="product-o__rating gl-rating-style">

                                    <span class="product-o__review"><i
                                            class="fas fa-eye"></i> {{$product->views}}</span>
                                </div>

                                <span class="product-o__price">{{number_format($product->sale_price,0,'','.')}} VNĐ</span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 6 ======-->


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
                                                   href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">

                                                    <img class="aspect__img"
                                                         src="{{ asset($product->preview_image_path) }}"
                                                         alt=""></a></div>
                                            <div class="product-l__info-wrap">

                                                <span class="product-l__category">

                                                    <a href="shop-side-version-2.html">{{\App\Category::find($product->category_id)->name}}</a></span>

                                                <span class="product-l__name">

                                                    <a href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">{{$product->name}}</a></span>
                                                <div class="product-o__rating gl-rating-style">
                                                    <span class="product-o__review"><i class="far fa-eye"></i> {{$product->views}}</span>
                                                </div>

                                                <span class="product-l__price">{{number_format($product->sale_price,0,'','.')}} VNĐ</span>
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
                                                   href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">

                                                    <img class="aspect__img"
                                                         src="{{ asset($product->preview_image_path) }}"
                                                         alt=""></a></div>
                                            <div class="product-l__info-wrap">

                                                <span class="product-l__category">

                                                    <a href="shop-side-version-2.html">{{\App\Category::find($product->category_id)->name}}</a></span>

                                                <span class="product-l__name">

                                                    <a href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">{{$product->name}}</a></span>
                                                <div class="product-o__rating gl-rating-style">
                                                    <span class="product-o__review"><i class="far fa-eye"></i> {{$product->views}}</span>
                                                </div>

                                                <span class="product-l__price">{{number_format($product->sale_price,0,'','.')}} VNĐ</span>
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
                                                   href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">

                                                    <img class="aspect__img"
                                                         src="{{ asset($product->preview_image_path) }}"
                                                         alt=""></a></div>
                                            <div class="product-l__info-wrap">

                                                <span class="product-l__category">

                                                    <a href="shop-side-version-2.html">{{\App\Category::find($product->category_id)->name}}</a></span>

                                                <span class="product-l__name">

                                                    <a href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">{{$product->name}}</a></span>
                                                <div class="product-o__rating gl-rating-style">
                                                    <span class="product-o__review"><i class="far fa-eye"></i> {{$product->views}}</span>
                                                </div>

                                                <span class="product-l__price">{{number_format($product->sale_price,0,'','.')}} VNĐ</span>
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

                        @for($i = 1; $i <= 8; $i++)
                            <div class="brand-slide">
                                <img src="{{ asset('images/brands/brand' . $i . '.jpg' ) }}" alt="">
                            </div>
                        @endfor

                    </div>
                </div>
                <!--====== End - Brand Slider ======-->
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 12 ======-->
@endsection
