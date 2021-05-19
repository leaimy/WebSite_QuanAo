@extends('Frontend.app')

@section('content')
    <div class="u-s-p-t-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">

                    <!--====== Product Breadcrumb ======-->
                    <div class="pd-breadcrumb u-s-m-b-30">
                        <ul class="pd-breadcrumb__list">
                            <li class="has-separator">

                                <a href="{{route('frontend.index')}}">Trang chủ</a></li>

                            <li class="has-separator">
                                <a href="shop-side-version-2.html">{{ \App\Category::find($product->category_id)->name }}</a>
                            </li>

                            <li class="is-marked">
                                <a href="shop-side-version-2.html">{{$product->name}}</a></li>
                        </ul>
                    </div>
                    <!--====== End - Product Breadcrumb ======-->


                    <!--====== Product Detail Zoom ======-->
                    <div class="pd u-s-m-b-30">
                        <div class="slider-fouc pd-wrap">
                            <div id="pd-o-initiate">
                                @foreach($productimages as $image)
                                    <div class="pd-o-img-wrap" data-src="{{asset($image->path)}}">
                                        <img class="u-img-fluid" src="{{asset($image->path)}}"
                                             data-zoom-image="{{asset($image->path)}}" alt="">
                                    </div>
                                @endforeach

                            </div>

                            <span class="pd-text">Click for larger zoom</span>
                        </div>
                        <div class="u-s-m-t-15">
                            <div class="slider-fouc">
                                <div id="pd-o-thumbnail">
                                    @foreach($productimages as $image)
                                        <div>
                                            <img class="u-img-fluid" src="{{asset($image->path)}}" alt="">
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--====== End - Product Detail Zoom ======-->
                    </div>
                </div>
                <div class="col-lg-7">

                    <!--====== Product Right Side Details ======-->
                    <div class="pd-detail">
                        <div>

                            <span class="pd-detail__name">{{$product->name}}</span></div>
                        <div>
                            <div class="pd-detail__inline">

                                <span class="pd-detail__price">{{number_format($product->sale_price,0,'','.')}} VNĐ</span>

                            </div>
                        </div>
                        <div class="u-s-m-b-15">
                            <div class="pd-detail__rating gl-rating-style">
                                <span class="pd-detail__review u-s-m-l-4">Lượt xem: </span>
                                <span class="pd-detail__review u-s-m-l-4">{{$product->views}}</span>
                            </div>
                        </div>
                        <div class="u-s-m-b-15">
                            <div class="pd-detail__inline">

                                <span class="pd-detail__stock">{{$product->available_stock}}</span>

                                <span class="pd-detail__left">{{$productdetails[0]->quantity}}</span></div>
                        </div>
                        <div class="u-s-m-b-15">

                            <span class="pd-detail__preview-desc">{{$product->description}}</span>
                        </div>
                        <div class="u-s-m-b-15">
                            <form class="pd-detail__form">
                                <div class="u-s-m-b-15">

                                    <span class="pd-detail__label u-s-m-b-8">Màu sắc:</span>
                                    <div class="pd-detail__color">
                                        @foreach($unique_colors as $color)

                                            <div class="size__radio">
                                                <input type="radio" id="color-{{ $loop->index }}" name="color"
                                                       @if ($loop->index == 0) checked @endif
                                                >
                                                <label class="size__radio-label" for="color-{{ $loop->index }}">{{$color}}</label>
                                            </div>

                                        @endforeach


                                    </div>
                                </div>
                                <div class="u-s-m-b-15">

                                    <span class="pd-detail__label u-s-m-b-8">Kích thước:</span>
                                    <div class="pd-detail__size">

                                        @foreach($unique_sizes as $size)

                                            <div class="size__radio">
                                                <input type="radio" id="size-{{ $loop->index }}" name="size"
                                                       @if ($loop->index == 0) checked @endif
                                                >
                                                <label class="size__radio-label" for="size-{{ $loop->index }}">{{$size}}</label>
                                            </div>

                                        @endforeach
                                    </div>
                                </div>
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

                                        <button class="btn btn--e-brand-b-2" type="submit">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="u-s-m-b-15">

                            <span class="pd-detail__label u-s-m-b-8">Chính sách sản phẩm:</span>
                            <ul class="pd-detail__policy-list">
                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                    <span>Bảo vệ người mua hàng</span></li>
                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                    <span>Hoàn trả đầy đủ nếu bạn không nhận được đơn đặt hàng của mình.</span></li>
                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                    <span>Trả hàng được chấp nhận nếu sản phẩm không như mô tả.</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--====== End - Product Right Side Details ======-->
                </div>
            </div>
        </div>
    </div>

    <!--====== Product Detail Tab ======-->

    <!--====== End - Product Detail Tab ======-->
    <div class="u-s-p-b-90">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">SẢN PHẨM LIÊN QUAN</h1>

                            <span class="section__span u-c-grey">MỘT SỐ SẢN PHẨM GỢI Ý</span>
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
                        @foreach($products as $item)
                        <div class="u-s-m-b-30">
                            <div class="product-o product-o--hover-on">
                                <div class="product-o__wrap">

                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                       href="{{route('chitietsanpham',['slug'=>$item->slug])}}">

                                        <img class="aspect__img" src="{{asset($item->preview_image_path)}}"
                                             alt="">
                                    </a>

                                </div>

                                <span class="product-o__category">

                                            <a href="shop-side-version-2.html">{{ \App\Category::find($item->category_id)->name }}</a></span>

                                <span class="product-o__name">

                                            <a href="{{route('chitietsanpham',['slug'=>$item->slug])}}">{{$item->name}}</a></span>
                                <div class="product-o__rating gl-rating-style">

                                    <span class="product-o__review"><i class="fas fa-eye"></i> {{ $item->views }}</span>
                                </div>

                                <span class="product-o__price">{{number_format($item->sale_price,0,'','.')}} VNĐ</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 1 ======-->
@endsection('content')
