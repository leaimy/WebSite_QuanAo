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

                                    <a href="{{route('thongtincanhan')}}">Tài khoản của tôi</a></li>
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

                                        <span class="dash__text u-s-m-b-16">Xin chào, {{$customer->first_name }}</span>
                                        <ul class="dash__f-list">

                                            <li>
                                                <a class="dash-active" href="{{route('thongtincanhan')}}">Hồ sơ của tôi</a></li>
                                            <li>

                                                <a href="{{route('thongtindonhang')}}">Đơn hàng của tôi</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                    <div class="dash__pad-1">
                                        <ul class="dash__w-list">
                                            <li>
                                                <div class="dash__w-wrap">

                                                    <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                                                    <span class="dash__w-text">
                                                        {{ $number_of_orders }}
                                                    </span>

                                                    <span class="dash__w-name">Đặt hàng</span></div>
                                            </li>
                                            <li>
                                                <div class="dash__w-wrap">

                                                    <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

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
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">Hồ sơ của {{$customer->first_name}}</h1>

                                        <span class="dash__text u-s-m-b-30">Xem tất cả thông tin của bạn, bạn có thể tùy chỉnh hồ sơ của mình.</span>
                                        <div class="row">
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <h2 class="dash__h2 u-s-m-b-8">Họ và tên</h2>

                                                <span class="dash__text">{{$customer->getFullName()}}</span>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <h2 class="dash__h2 u-s-m-b-8">Tên đăng nhập</h2>

                                                <span class="dash__text">{{$customer->username}}</span>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <h2 class="dash__h2 u-s-m-b-8">E-mail</h2>

                                                <span class="dash__text">{{$customer->email}}</span>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <h2 class="dash__h2 u-s-m-b-8">Số điện thoại</h2>

                                                <span class="dash__text">{{$customer->phone_number}}</span>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <h2 class="dash__h2 u-s-m-b-8">Địa chỉ</h2>

                                                <span class="dash__text">{{$customer->getAdrress()}}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="u-s-m-b-16">

                                                    <a class="dash__custom-link btn--e-transparent-brand-b-2" href="{{route('capnhathoso')}}">Cập nhật hồ sơ</a></div>
                                            </div>
                                        </div>
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
