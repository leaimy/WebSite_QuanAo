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

    <script>
        const base_url = window.location.origin;
        const api_url = `${base_url}/api/v1/tinh`;

        const tinhOption = document.getElementById('tinh');
        const quanHuyenOption = document.getElementById('quanhuyen');
        const xaPhuongOption = document.getElementById('xaphuong');

        const provinceElement = document.getElementById('province');
        const districtElement = document.getElementById('district');
        const villageElement = document.getElementById('village');

        const userTinh = '{{$province}}';
        const userHuyen = '{{$district}}';
        const userXa = '{{$village}}';

        fetch(api_url)
            .then(res => res.json())
            .then(data => {
                const allKeys = Object.keys(data);

                tinhOption.innerHTML = allKeys.map((key, idx) => {
                    const {code, name_with_type} = data[key];
                    if (idx === 0) {
                        tinhOption.value = code;
                        return `<option selected value="${code}"">${name_with_type}</option>`;
                    }
                    else
                        return `<option value="${code}"">${name_with_type}</option>`;
                }).join('');

                Array.from(tinhOption.querySelectorAll('option')).map(option => {
                    if (option.innerHTML === userTinh)
                        option.selected = true;
                });

                tinhOption.addEventListener('change', e => {
                    const tinhID = e.target.value;
                    const selectedElement = e.target.querySelector(`option[value='${tinhID}']`);
                    provinceElement.value = selectedElement.innerHTML;

                    const quanhuyen_api_url = `${base_url}/api/v1/quan-huyen/${tinhID}`;
                    fetch(quanhuyen_api_url)
                        .then(res => res.json())
                        .then(quanhuyen_data => {
                            quanHuyenOption.innerHTML = quanhuyen_data.map((item, idx) => {
                                const {code, name_with_type} = item;
                                if (idx === 0) {
                                    quanHuyenOption.value = code;
                                    return `<option selected value="${code}"">${name_with_type}</option>`;
                                }
                                else
                                    return `<option value="${code}"">${name_with_type}</option>`;
                            }).join('');

                            Array.from(quanHuyenOption.querySelectorAll('option')).map(option => {
                                if (option.innerHTML === userHuyen)
                                    option.selected = true;
                            });

                            quanHuyenOption.addEventListener('change', e => {
                                const quanHuyenID = e.target.value;
                                const selectedElement = e.target.querySelector(`option[value='${quanHuyenID}']`);
                                districtElement.value = selectedElement.innerHTML;

                                const xaphuong_api_url = `${base_url}/api/v1/xa-phuong/${quanHuyenID}`;
                                fetch(xaphuong_api_url)
                                    .then(res => res.json())
                                    .then(results => {
                                        const allKeys = Object.keys(results);
                                        xaPhuongOption.innerHTML = allKeys.map((key, idx) => {
                                            const {code, name_with_type} = results[key];
                                            if (idx === 0) {
                                                xaPhuongOption.value = code;
                                                return `<option selected value="${code}"">${name_with_type}</option>`;
                                            }
                                            else
                                                return `<option value="${code}"">${name_with_type}</option>`;
                                        }).join('');

                                        Array.from(xaPhuongOption.querySelectorAll('option')).map(option => {
                                            if (option.innerHTML === userXa)
                                                option.selected = true;
                                        });

                                        xaPhuongOption.addEventListener('change', e => {
                                            const xaPhuongID = e.target.value;
                                            const selectedElement = e.target.querySelector(`option[value='${xaPhuongID}']`);
                                            villageElement.value = selectedElement.innerHTML;
                                        })

                                        if ("createEvent" in document) {
                                            var evt = document.createEvent("HTMLEvents");
                                            evt.initEvent("change", false, true);
                                            xaPhuongOption.dispatchEvent(evt);
                                        }
                                        else
                                            xaPhuongOption.fireEvent("onchange");
                                    })
                                    .catch(err => console.log(err));
                            });

                            if ("createEvent" in document) {
                                var evt = document.createEvent("HTMLEvents");
                                evt.initEvent("change", false, true);
                                quanHuyenOption.dispatchEvent(evt);
                            }
                            else
                                quanHuyenOption.fireEvent("onchange");
                        })
                        .catch(err => console.log(err));
                });

                if ("createEvent" in document) {
                    var evt = document.createEvent("HTMLEvents");
                    evt.initEvent("change", false, true);
                    tinhOption.dispatchEvent(evt);
                }
                else
                    tinhOption.fireEvent("onchange");
            })
            .catch(err => console.log(err));
    </script>
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

                                        <span class="dash__text u-s-m-b-16">Xin chào, {{$customer->first_name}}</span>
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
                                                <form action="{{route('capnhattaikhoan',[$customer->id])}}" method="post" class="dash-edit-p">
                                                    @csrf
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-fname">TÊN *</label>

                                                            <input name="first_name" value="{{$customer->first_name}}" class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="Nhập tên"></div>

                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-lname">HỌ ĐỆM *</label>

                                                            <input name="last_name" value="{{$customer->last_name}}" class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Nhập họ đệm"></div>
                                                    </div>
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-username">TÊN ĐĂNG NHẬP *</label>

                                                            <input name="username" value="{{$customer->username}}" class="input-text input-text--primary-style" type="text" id="reg-username" placeholder="Nhập tên đăng nhập"></div>

                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-email">E-MAIL *</label>

                                                            <input name="email" value="{{$customer->email}}" class="input-text input-text--primary-style" type="text" id="reg-email" placeholder="Nhập E-mail"></div>
                                                    </div>
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-password">PASSWORD *</label>

                                                            <input name="password" class="input-text input-text--primary-style" type="text" id="reg-password" placeholder="Nhập mật khẩu"></div>
                                                        <!--====== PHONE ======-->
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="billing-phone">SỐ ĐIỆN THOẠI *</label>

                                                            <input name="phone_number" value="{{$customer->phone_number}}" class="input-text input-text--primary-style" type="text"
                                                                   id="billing-phone"
                                                                   data-bill="" placeholder="Nhập số điện thoại">
                                                        </div>
                                                    </div>
                                                        <!--====== End - PHONE ======-->


                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-15">

                                                            <!--====== Date of Birth Select-Box ======-->

                                                            <span class="gl-label">ĐỊA CHỈ</span>
                                                            <input type="hidden" name="province" value="" id="province">
                                                            <input type="hidden" name="district" value="" id="district">
                                                            <input type="hidden" name="village" value="" id="village">
                                                            <div class="gl-dob">
                                                                <select
                                                                    class="select-box select-box--primary-style"
                                                                    id="tinh"
                                                                >
                                                                    <option selected>Tỉnh/Thành Phố</option>

                                                                </select>
                                                                <select id="quanhuyen"
                                                                        class="select-box select-box--primary-style">
                                                                    <option selected>Quận/Huyện</option>
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                </select>
                                                                <select id="xaphuong"
                                                                        class="select-box select-box--primary-style">
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

                                                            <input name="street" value="{{$customer->street}}" class="input-text input-text--primary-style" type="text"
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
