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
                        <div class="col-lg-9 col-md-12 u-s-m-b-30">
                            <div class="l-f-o">
                                <div class="l-f-o__pad-box">
                                    <h1 class="gl-h1">THÔNG TIN CÁ NHÂN</h1>
                                    <form class="l-f-o__form" action="{{route('taotaikhoan')}}" method="post">
                                        @csrf
                                        <div class="gl-s-api">
                                            <div class="u-s-m-b-15">

                                                <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i
                                                        class="fab fa-facebook-f"></i>

                                                    <span>Tạo tài khoản với Facebook</span></button>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i
                                                        class="fab fa-google"></i>

                                                    <span>Tạo tài khoản với Google</span></button>
                                            </div>
                                        </div>
                                        <div class="gl-inline">
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-fname">TÊN *</label>

                                            <input name="first_name" class="input-text input-text--primary-style" type="text"
                                                   id="reg-fname" placeholder="Nhập tên"></div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-lname">HỌ ĐỆM *</label>

                                            <input name="last_name" class="input-text input-text--primary-style" type="text"
                                                   id="reg-lname" placeholder="Nhập họ đệm"></div>
                                        </div>

                                        <div class="gl-inline">
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-username">TÊN ĐĂNG NHẬP *</label>

                                            <input name="username" class="input-text input-text--primary-style" type="text"
                                                   id="reg-username" placeholder="Nhập tên đăng nhập"></div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-email">E-MAIL *</label>

                                            <input name="email" class="input-text input-text--primary-style" type="text"
                                                   id="reg-email" placeholder="Nhập E-mail"></div>
                                        </div>

                                        <div class="gl-inline">
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-password">PASSWORD *</label>

                                            <input name="password" class="input-text input-text--primary-style" type="text"
                                                   id="reg-password" placeholder="Nhập mật khẩu"></div>

                                        <!--====== PHONE ======-->
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="billing-phone">SỐ ĐIỆN THOẠI *</label>

                                            <input name="phone_number" class="input-text input-text--primary-style" type="text"
                                                   id="billing-phone"
                                                   data-bill="" placeholder="Nhập số điện thoại">
                                        </div>
                                        <!--====== End - PHONE ======-->
                                        </div>

                                        <div class="gl-inline">
                                            <div class="u-s-m-b-15">

                                                <!--====== Date of Birth Select-Box ======-->

                                                <span class="gl-label">ĐỊA CHỈ</span>
                                                <div class="gl-dob"><select
                                                        name="province"
                                                        class="select-box select-box--primary-style">
                                                        <option selected>Tỉnh/Thành Phố</option>
                                                        <option value="male">January</option>
                                                        <option value="male">February</option>
                                                        <option value="male">March</option>
                                                        <option value="male">April</option>
                                                    </select><select name="district" class="select-box select-box--primary-style">
                                                        <option selected>Quận/Huyện</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                    </select><select name="village" class="select-box select-box--primary-style">
                                                        <option selected>Xã/Phường/Thị Trấn</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1994">1994</option>
                                                    </select>
                                                </div>


                                                <!--====== End - Date of Birth Select-Box ======-->
                                            </div>
                                        </div>

                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">

                                                <input name="street" class="input-text input-text--primary-style" type="text"
                                                       id="billing-street"
                                                       placeholder="Số nhà/tên đường" data-bill="">
                                            </div>
                                        </div>
                                        <div class="gl-inline">

                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">TẠO ĐĂNG
                                                    NHẬP
                                                </button>
                                                <a class="gl-link" href="{{route('frontend.index')}}">Quay về
                                                    trang chủ</a>

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
