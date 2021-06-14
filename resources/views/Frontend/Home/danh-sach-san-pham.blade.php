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
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shop-p">
                            <div class="shop-p__toolbar u-s-m-b-30">
                                <div class="shop-p__tool-style">
                                    <div class="tool-style__group u-s-m-b-8">

                                        <span class="js-shop-grid-target is-active">Grid</span>

                                        <span class="js-shop-list-target">List</span></div>
                                </div>
                            </div>
                            <div class="shop-p__collection">
                                <div class="row is-grid-active">
                                    @foreach($products as $product)

                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product-m">
                                            <div class="product-m__thumb">

                                                <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">

                                                    <img class="aspect__img" src="{{ asset($product->preview_image_path) }}" alt=""></a>


                                            </div>
                                            <div class="product-m__content">
                                                <div class="product-m__category">

                                                    <a href="{{ route('chitietsanpham',['slug' => $product->slug]) }}">{{ $product->name }}</a></div>
                                                <div class="product-m__name">

                                                    <a href="product-detail.html">{{ \App\Category::find($product->category_id)->name }}</a></div>
                                                <div class="product-m__rating gl-rating-style">

                                                    <span class="product-m__review">{{$product->views}}</span></div>
                                                <div class="product-m__price">{{number_format($product->sale_price,0,'','.')}} VNĐ</div>
                                                <div class="product-m__hover">
                                                    <div class="product-m__preview-description">

                                                        <span>{{ $product->description }}</span></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                            </div>
                            <div class="u-s-p-y-60">

                                <!--====== Pagination ======-->
                                <ul class="shop-p__pagination">
                                    <li class="is-active">

                                        <a href="shop-side-version-2.html">1</a></li>
                                    <li>

                                        <a href="shop-side-version-2.html">2</a></li>
                                    <li>

                                        <a href="shop-side-version-2.html">3</a></li>
                                    <li>

                                        <a href="shop-side-version-2.html">4</a></li>
                                    <li>

                                        <a class="fas fa-angle-right" href="shop-side-version-2.html"></a></li>
                                </ul>
                                <!--====== End - Pagination ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->
    </div>
    <!--====== End - App Content ======-->


@endsection
