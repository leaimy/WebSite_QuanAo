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

                                        <span class="dash__text u-s-m-b-16">Xin chào, HIẾU CHÓ ĐIÊN</span>
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

                                                    <span class="dash__w-text">4</span>

                                                    <span class="dash__w-name">Đặt hàng</span></div>
                                            </li>
                                            <li>
                                                <div class="dash__w-wrap">

                                                    <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

                                                    <span class="dash__w-text">0</span>

                                                    <span class="dash__w-name">Hủy đơn hàng</span></div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Dashboard Features ======-->
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">Cập nhật hồ sơ</h1>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form class="dash-edit-p">
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-fname">TÊN *</label>

                                                            <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="Nhập tên"></div>

                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-lname">HỌ ĐỆM *</label>

                                                            <input class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Nhập họ đệm"></div>
                                                    </div>
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-username">TÊN ĐĂNG NHẬP *</label>

                                                            <input class="input-text input-text--primary-style" type="text" id="reg-username" placeholder="Nhập tên đăng nhập"></div>

                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-email">E-MAIL *</label>

                                                            <input class="input-text input-text--primary-style" type="text" id="reg-email" placeholder="Nhập E-mail"></div>
                                                    </div>
                                                    <div class="gl-inline">
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
                                                    </div>
                                                        <!--====== End - PHONE ======-->


                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-15">

                                                            <!--====== Date of Birth Select-Box ======-->

                                                            <span class="gl-label">ĐỊA CHỈ</span>
                                                            <div class="gl-dob"><select class="select-box select-box--primary-style">
                                                                    <option selected>Tỉnh/Thành Phố</option>
                                                                    <option value="male">January</option>
                                                                    <option value="male">February</option>
                                                                    <option value="male">March</option>
                                                                    <option value="male">April</option>
                                                                </select><select class="select-box select-box--primary-style">
                                                                    <option selected>Quận/Huyện</option>
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                </select><select class="select-box select-box--primary-style">
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

                                                            <input class="input-text input-text--primary-style" type="text"
                                                                   id="billing-street"
                                                                   placeholder="Số nhà/tên đường" data-bill="">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn--e-brand-b-2" type="submit">LƯU CẬP NHẬT</button>
                                                </form>
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

    <!--====== Main Footer ======-->
@endsection
