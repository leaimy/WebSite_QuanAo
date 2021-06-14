@extends('Frontend.app')

@section('title')
    Shop Bạch Tuyết 🐇 | Cửa hàng quần áo số 1 Việt Nam
@endsection

@section('style')
    <!--===== Custom ====-->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
@endsection

@section('script')
    <!--===== Cart ====-->
    <script src="{{ asset('frontend/js/cart.js') }}"></script>
@endsection

@section('content')
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="breadcrumb">
                        <div class="breadcrumb__wrap">
                            <ul class="breadcrumb__list">
                                <li class="has-separator">

                                    <a href="{{route('frontend.index')}}">Trang chủ</a></li>
                                <li class="is-marked">

                                    <a href="{{route('thongtindonhang')}}">Tài khoản của tôi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="dash">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">

                                <!--====== Dashboard Features ======-->
                                <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                    <div class="dash__pad-1">

                                        <span
                                            class="dash__text u-s-m-b-16">Xin chào {{ Auth::guard('customer')->user()->username }}</span>
                                        <ul class="dash__f-list">
                                            <li>

                                                <a href="{{route('thongtincanhan')}}">Hồ sơ của tôi</a></li>
                                            <li>

                                                <a class="dash-active" href="{{route('thongtindonhang')}}">Đơn hàng của
                                                    tôi</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                    <div class="dash__pad-1">
                                        <ul class="dash__w-list">
                                            <li>
                                                <div class="dash__w-wrap">

                                                    <span class="dash__w-icon dash__w-icon-style-1"><i
                                                            class="fas fa-cart-arrow-down"></i></span>

                                                    <span class="dash__w-text">
                                                        {{ $number_of_orders }}
                                                    </span>

                                                    <span class="dash__w-name">Đặt hàng</span></div>
                                            </li>
                                            <li>
                                                <div class="dash__w-wrap">

                                                    <span class="dash__w-icon dash__w-icon-style-2"><i
                                                            class="fas fa-times"></i></span>

                                                    <span class="dash__w-text">
                                                        {{ $number_of_canceled_orders }}
                                                    </span>

                                                    <span class="dash__w-name">Hủy đơn hàng</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Dashboard Features ======-->
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <h1 class="dash__h1 u-s-m-b-30">Chi tiết đơn hàng</h1>
                                <div
                                    class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <div class="dash-l-r">
                                            <div>
                                                <div class="manage-o__text-2 u-c-secondary">Mã số đơn hàng:
                                                    ORDER{{ $order->id }}</div>
                                                <div class="manage-o__text u-c-silver">Thời gian đặt
                                                    hàng: {{ $order->created_at }}</div>
                                            </div>
                                            <div>
                                                <div class="manage-o__text-2 u-c-silver">Tổng tiền:

                                                    <span class="manage-o__text-2 u-c-secondary">{{ $order->total_price }} VND</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <div class="manage-o">
                                            <div class="manage-o__header u-s-m-b-30">
                                                <div class="manage-o__icon"><i class="fas fa-box u-s-m-r-5"></i>

                                                    <span class="manage-o__text">Thông tin đơn hàng</span></div>
                                            </div>

                                            @foreach($order_details as $detail)

                                            <div class="manage-o__description u-s-m-b-20">
                                                <div class="description__container">
                                                    <div class="description__img-wrap">

                                                        <img class="u-img-fluid"
                                                             src="{{ asset($detail->product->preview_image_path) }}" alt=""></div>
                                                    <div class="description-title">{{ $detail->product->custom_name }}</div>
                                                </div>
                                                <div class="description__info-wrap">
                                                    <div>

                                                            <span class="manage-o__text-2 u-c-silver">Số lượng:

                                                                <span
                                                                    class="manage-o__text-2 u-c-secondary">{{ $detail->quantity }}</span></span>
                                                    </div>
                                                    <div>

                                                            <span class="manage-o__text-2 u-c-silver">Số tiền:

                                                                <span
                                                                    class="manage-o__text-2 u-c-secondary">
                                                                    {{ $detail->product->sub_price }} VND
                                                                </span></span>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">

                                            @if ($order->order_option == \App\OrderOptions::$SHIPPING)

                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h2 u-s-m-b-8">Địa chỉ nhận hàng</h2>
                                                    <h2 class="dash__h2 u-s-m-b-8">
                                                        {{ $customer->last_name . ' ' . $customer->first_name }}
                                                    </h2>

                                                    <span class="dash__text-2">
                                                        {{ $customer->street . ', ' . $customer->village . ', ' . $customer->district . ', ' . $customer->province }}
                                                    </span>

                                                    <span class="dash__text-2">{{ $customer->phone_number }}</span>
                                                </div>

                                            @else

                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h2 u-s-m-b-8">Nhận hàng tại cửa hàng</h2>
                                                    <h2 class="dash__h2 u-s-m-b-8">Cửa hàng quần áo Bạch Tuyết</h2>

                                                    <span class="dash__text-2">1 Phù Đổng Thiên Vương phường 8 Đà Lạt Lâm Đồng</span>

                                                    <span class="dash__text-2">0702383675</span>
                                                </div>

                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dash__box dash__box--bg-white dash__box--shadow u-h-100">

                                            @if($order->order_option == \App\OrderOptions::$SHIPPING)

                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h2 u-s-m-b-8">Tổng quan số tiền phải thanh
                                                        toán</h2>
                                                    <div class="dash-l-r u-s-m-b-8">
                                                        <div class="manage-o__text-2 u-c-secondary">Tổng tiền hàng</div>
                                                        <div class="manage-o__text-2 u-c-secondary">
                                                            {{ $order->total_price - 35000 }} VND
                                                        </div>
                                                    </div>
                                                    <div class="dash-l-r u-s-m-b-8">
                                                        <div class="manage-o__text-2 u-c-secondary">Phí giao hàng</div>
                                                        <div class="manage-o__text-2 u-c-secondary">35000 VND</div>
                                                    </div>
                                                    <div class="dash-l-r u-s-m-b-8">
                                                        <div class="manage-o__text-2 u-c-secondary">Tổng thanh toán
                                                        </div>
                                                        <div class="manage-o__text-2 u-c-secondary">
                                                            {{ $order->total_price }} VND
                                                        </div>
                                                    </div>

                                                    <span class="dash__text-2">Vui lòng thanh toán bằng tiền mặt khi giao hàng</span>
                                                </div>

                                            @else

                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h2 u-s-m-b-8">Tổng quan số tiền phải thanh
                                                        toán</h2>
                                                    <div class="dash-l-r u-s-m-b-8">
                                                        <div class="manage-o__text-2 u-c-secondary">Tổng tiền hàng</div>
                                                        <div class="manage-o__text-2 u-c-secondary">{{ $order->total_price }}</div>
                                                    </div>
                                                    <div class="dash-l-r u-s-m-b-8">
                                                        <div class="manage-o__text-2 u-c-secondary">Phí giao hàng</div>
                                                        <div class="manage-o__text-2 u-c-secondary">0 VND</div>
                                                    </div>
                                                    <div class="dash-l-r u-s-m-b-8">
                                                        <div class="manage-o__text-2 u-c-secondary">Tổng thanh toán
                                                        </div>
                                                        <div class="manage-o__text-2 u-c-secondary">{{ $order->total_price }} VND</div>
                                                    </div>

                                                    <span class="dash__text-2">Vui lòng thanh toán bằng tiền mặt khi giao hàng</span>
                                                </div>

                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>
        <!--====== End - App Content ======-->

@endsection
