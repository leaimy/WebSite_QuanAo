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

                                    <a href="{{route('khachhangdangnhap')}}">Đăng nhập</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">BẠN ĐÃ CÓ TÀI KHOẢN CHƯA?</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row row--center">
                        <div class="col-lg-6 col-md-8 u-s-m-b-30">
                            <div class="l-f-o">
                                <div class="l-f-o__pad-box">
                                    <h1 class="gl-h1">Tôi là khách hàng mới</h1>

                                    <span class="gl-text u-s-m-b-30">Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể thực hiện quy trình thanh toán nhanh hơn, lưu trữ địa chỉ giao hàng, xem và theo dõi đơn đặt hàng trong tài khoản của bạn và hơn thế nữa.</span>
                                    <div class="u-s-m-b-15">

                                        <a class="l-f-o__create-link btn--e-transparent-brand-b-2"
                                           href="{{route('khachhangtaotaikhoan')}}">TẠO MỘT TÀI KHOẢN</a></div>
                                    <h1 class="gl-h1">ĐĂNG NHẬP</h1>

                                    <span class="gl-text u-s-m-b-30">Nếu bạn đã có tài khoản, vui lòng đăng nhập</span>
                                    <form action="{{route('dangnhap')}}" method="post" class="l-f-o__form">
                                        @csrf
                                        <div class="gl-s-api">
                                            <div class="u-s-m-b-15">

                                                <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i
                                                        class="fab fa-facebook-f"></i>

                                                    <span>Đăng nhập với Facebook</span></button>
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i
                                                        class="fab fa-google"></i>

                                                    <span>Đăng nhập với Google</span></button>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="login-email">TÊN ĐĂNG NHẬP *</label>

                                            <input name="username" class="input-text input-text--primary-style" type="text"
                                                   id="login-email" placeholder="Vui lòng nhập tên đăng nhập"></div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="login-password">MẬT KHẨU *</label>

                                            <input name="password" class="input-text input-text--primary-style" type="password"
                                                   id="login-password" placeholder="Vui lòng nhập mật khẩu"></div>
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">

                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">ĐĂNG
                                                    NHẬP
                                                </button>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <a class="gl-link" href="lost-password.html">Quên mật khẩu?</a></div>
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <!--====== Check Box ======-->
                                            <div class="check-box">

                                                <input name="remember" type="checkbox" id="remember-me">
                                                <div class="check-box__state check-box__state--primary">

                                                    <label class="check-box__label" for="remember-me">Ghi nhớ tài
                                                        khoản</label></div>
                                            </div>
                                            <!--====== End - Check Box ======-->
                                        </div>
                                    </form>
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

