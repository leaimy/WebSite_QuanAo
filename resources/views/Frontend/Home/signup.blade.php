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

                                    <a href="{{route('khachhangtaotaikhoan')}}">Tạo tài khoản</a></li>
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
                                <h1 class="section__heading u-c-secondary">TẠO MỘT TÀI KHOẢN</h1>
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
                                    <h1 class="gl-h1">THÔNG TIN CÁ NHÂN</h1>
                                    <form class="l-f-o__form">
                                        <div class="gl-s-api">
                                            <div class="u-s-m-b-15">

                                                <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i class="fab fa-facebook-f"></i>

                                                    <span>Tạo tài khoản với Facebook</span></button></div>
                                            <div class="u-s-m-b-30">

                                                <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i class="fab fa-google"></i>

                                                    <span>Tạo tài khoản với Google</span></button></div>
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-fname">TÊN *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="Nhập tên"></div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-lname">HỌ ĐỆM *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Nhập họ đệm"></div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-username">TÊN ĐĂNG NHẬP *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="reg-username" placeholder="Nhập tên đăng nhập"></div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-email">E-MAIL *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="reg-email" placeholder="Nhập E-mail"></div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-password">PASSWORD *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="reg-password" placeholder="Nhập mật khẩu"></div>

                                        <!--====== PHONE ======-->
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="billing-phone">SỐ ĐIỆN THOẠI *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                   id="billing-phone"
                                                   data-bill="" placeholder="Nhập số điện thoại">
                                        </div>
                                        <!--====== End - PHONE ======-->

                                        <!--====== STATE/PROVINCE ======-->
                                        <div class="u-s-m-b-15">

                                            <!--====== Select Box ======-->

                                            <label class="gl-label" for="billing-state">TỈNH/ THÀNH PHỐ *</label>
                                            <select
                                                class="select-box select-box--primary-style" id="billing-tinhthanhpho"
                                                data-bill="">
                                                <option selected value="">Chọn Tỉnh/Thành Phố</option>
                                                <option value="al">Alabama</option>
                                                <option value="al">Alaska</option>
                                                <option value="ny">New York</option>
                                            </select>
                                            <!--====== End - Select Box ======-->
                                        </div>
                                        <!--====== End - STATE/PROVINCE ======-->

                                        <!--====== STATE/PROVINCE ======-->
                                        <div class="u-s-m-b-15">

                                            <!--====== Select Box ======-->

                                            <label class="gl-label" for="billing-state">QUẬN/HUYỆN *</label>
                                            <select
                                                class="select-box select-box--primary-style" id="billing-quanhuyen"
                                                data-bill="">
                                                <option selected value="">Chọn Quận/Huyện</option>
                                                <option value="al">Alabama</option>
                                                <option value="al">Alaska</option>
                                                <option value="ny">New York</option>
                                            </select>
                                            <!--====== End - Select Box ======-->
                                        </div>
                                        <!--====== End - STATE/PROVINCE ======-->

                                        <!--====== STATE/PROVINCE ======-->
                                        <div class="u-s-m-b-15">

                                            <!--====== Select Box ======-->

                                            <label class="gl-label" for="billing-state">PHƯỜNG/XÃ *</label><select
                                                class="select-box select-box--primary-style" id="billing-phuongxa"
                                                data-bill="">
                                                <option selected value="">Chọn Phường/Xã</option>
                                                <option value="al">Alabama</option>
                                                <option value="al">Alaska</option>
                                                <option value="ny">New York</option>
                                            </select>
                                            <!--====== End - Select Box ======-->
                                        </div>
                                        <!--====== End - STATE/PROVINCE ======-->

                                        <!--====== Street Address ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-street">TOÀ NHÀ/TÊN ĐƯỜNG *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                   id="billing-street"
                                                   placeholder="Địa chỉ toà nhà/tên đường" data-bill="">
                                        </div>

                                            <button class="btn btn--e-transparent-brand-b-2" type="submit">TẠO ĐĂNG NHẬP</button></div>

                                        <a class="gl-link" href="{{route('frontend.index')}}">Quay về trang chủ</a>
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
