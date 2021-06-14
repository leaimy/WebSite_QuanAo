@extends('Frontend.app')

@section('title')
    Shop Bạch Tuyết 🐇 | Cửa hàng quần áo số 1 Việt Nam
@endsection

@section('style')
@endsection

@section('script')
    <script src="{{ asset('frontend/js/cart.js') }}"></script>

    <script>
        let savedProduct = loadLocalStorage();

        const isShipping = JSON.parse(window.localStorage.getItem('shipping'));

        if (isShipping) {
            document.getElementById('shippingFee').innerHTML = '35000 VND';
        }

        const cartItemContainer = document.getElementById('list-sold-items');
        const shippingFeeElement = document.getElementById('shippingFee');
        const subtotalElement = document.getElementById('subtotal');
        const totalElement = document.getElementById('grantotal');

        const submitForm = document.getElementById('submitForm');

        renderSubmitForm();

        function renderSubmitForm() {
            const savedProduct = loadLocalStorage();
            if (!savedProduct) return;

            const productIds = Object.keys(savedProduct);

            productIds.forEach(pID => {
                submitForm.insertAdjacentHTML('afterbegin', `
                    <input type="hidden" name="product_ids[]" value="${pID}" />
                `);

                const modelID = Object.keys(savedProduct[pID]);
                modelID.forEach(mId => {
                    submitForm.insertAdjacentHTML('afterbegin', `
                        <input type="hidden" name="model_ids[]" value="${mId}_${savedProduct[pID][mId].quantity}" />
                    `);
                });
            });

            submitForm.insertAdjacentHTML('afterbegin', `
                <input type="hidden" name="current_status" value="new web order" >
            `)

            if (isShipping) {
                submitForm.insertAdjacentHTML('afterbegin', `
                    <input type="hidden" name="order_option" value="shipping" >
                `)
            }
            else {
                submitForm.insertAdjacentHTML('afterbegin', `
                    <input type="hidden" name="order_option" value="buy at store" >
                `)
            }
        }

        renderCart();
        renderSubtotal();
        renderFinalCost();

        window.onCartItemRemove = renderCart;

        function renderCart() {
            const productIDs = Object.keys(savedProduct);
            cartItemContainer.innerHTML = '';
            productIDs.forEach(productID => {
                const modelIDs = Object.keys(savedProduct[productID]);
                const rows = modelIDs.map(modelID => generateRowItem(savedProduct[productID][modelID]));
                cartItemContainer.insertAdjacentHTML('afterbegin', rows.join(''));
            })
        }

        function generateRowItem(model) {
            const { id, productID, image, name, category, size, color, quantity, price } = model;
            return `
                <div class="o-card" id="model-${id}"}>
                    <div class="o-card__flex">
                        <div class="o-card__img-wrap">

                            <img class="u-img-fluid"
                                 src="${image}"
                                 alt="">
                        </div>
                        <div class="o-card__info-wrap">

                        <span class="o-card__name">

                            <a href="javascript:;">${category.name} | ${color} - ${size}</a></span>

                            <span class="o-card__quantity">Số lượng x ${quantity}</span>

                            <span class="o-card__price">${price * quantity} VND</span>
                        </div>
                    </div>
                </div>
            `;
        }

        function renderSubtotal() {
            if (!savedProduct) return;

            const productIDs = Object.keys(savedProduct);
            let subtotal = 0;

            productIDs.forEach(pID => {
                const modelIDs = Object.keys(savedProduct[pID]);
                subtotal += modelIDs.reduce((acc, cur, idx) => {
                    return acc + (savedProduct[pID][cur].price * savedProduct[pID][cur].quantity);
                }, 0);
            })

            subtotalElement.innerHTML = `${subtotal} VND`;
            renderFinalCost();
        }

        function renderFinalCost() {
            const shippingFee = shippingFeeElement.innerHTML.split(' ')[0] * 1;
            const subtotal = subtotalElement.innerHTML.split(' ')[0] * 1;

            totalElement.innerHTML = `${shippingFee + subtotal} VND`;

            submitForm.insertAdjacentHTML('afterbegin', `
                <input type="hidden" name="total_price" value="${shippingFee + subtotal}" >
            `)
        }

        document.getElementById('submitForm').addEventListener('submit', () => {
           saveToLocalStorage({});
        });
    </script>
@endsection

@section('content')
    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <li class="has-separator">

                                <a href="{{ route('frontend.index') }}">Trang chủ</a>
                            </li>
                            <li class="is-marked">

                                <a href="{{ route('frontend.checkout') }}">Thanh toán</a>
                            </li>
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="checkout-msg-group">
                            <div class="msg u-s-m-b-30">

                            <span class="msg__text">Bạn đã là đăng ký thành viên?

                                <a class="gl-link" href="#return-customer" data-toggle="collapse">Đăng nhập ngay</a></span>
                                <div class="collapse" id="return-customer" data-parent="#checkout-msg-group">
                                    <div class="l-f u-s-m-b-16">

                                    <span class="gl-text u-s-m-b-16"></span>
                                        <form class="l-f__form">
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-15">

                                                    <label class="gl-label" for="login-email">Tên người dùng *</label>

                                                    <input class="input-text input-text--primary-style" type="text"
                                                           id="login-email" value="{{ $customer->user_name }}" placeholder="Tên người dùng của bạn...">
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <label class="gl-label" for="login-password">Mật khẩu</label>

                                                    <input class="input-text input-text--primary-style" type="password"
                                                           id="login-password" placeholder="Mật khẩu">
                                                </div>
                                            </div>
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-15">

                                                    <button class="btn btn--e-transparent-brand-b-2"
                                                            type="submit">Đăng nhập
                                                    </button>
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <a class="gl-link" href="lost-password.html">Bạn quên mật khẩu?</a>
                                                </div>
                                            </div>

                                            <!--====== Check Box ======-->
                                            <div class="check-box">

                                                <input type="checkbox" id="remember-me">
                                                <div class="check-box__state check-box__state--primary">

                                                    <label class="check-box__label" for="remember-me">Ghi nhớ đăng nhập</label>
                                                </div>
                                            </div>
                                            <!--====== End - Check Box ======-->
                                        </form>
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


    <!--====== Section 3 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="checkout-f">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="checkout-f__h1">THÔNG TIN GIAO HÀNG</h1>
                            <form class="checkout-f__delivery">
                                <div class="u-s-m-b-30">

                                    <!--====== First Name, Last Name ======-->
                                    <div class="gl-inline">
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-fname">TÊN *</label>

                                            <input readonly value="{{ $customer->first_name }}" class="input-text input-text--primary-style" type="text"
                                                   id="billing-fname" data-bill="">
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-lname">HỌ ĐỆM *</label>

                                            <input readonly value="{{ $customer->last_name }}" class="input-text input-text--primary-style" type="text"
                                                   id="billing-lname" data-bill="">
                                        </div>
                                    </div>
                                    <!--====== End - First Name, Last Name ======-->


                                    <!--====== E-MAIL ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="billing-email">ĐỊA CHỈ EMAIL *</label>

                                        <input value="{{ $customer->email }}" readonly class="input-text input-text--primary-style" type="text"
                                               id="billing-email"
                                               data-bill="">
                                    </div>
                                    <!--====== End - E-MAIL ======-->


                                    <!--====== PHONE ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="billing-phone">SỐ ĐIỆN THOẠI *</label>

                                        <input readonly value="{{ $customer->phone_number }}" class="input-text input-text--primary-style" type="text"
                                               id="billing-phone"
                                               data-bill="">
                                    </div>
                                    <!--====== End - PHONE ======-->

                                    <!--====== STATE/PROVINCE ======-->
                                    <div class="u-s-m-b-15">

                                        <!--====== Select Box ======-->

                                        <label class="gl-label" for="billing-state">TỈNH/ THÀNH PHỐ *</label>
                                        <input readonly value="{{ $customer->province }}" class="input-text input-text--primary-style" type="text"
                                               id="billing"
                                               data-bill="">
                                        <!--====== End - Select Box ======-->
                                    </div>
                                    <!--====== End - STATE/PROVINCE ======-->

                                    <!--====== STATE/PROVINCE ======-->
                                    <div class="u-s-m-b-15">

                                        <!--====== Select Box ======-->

                                        <label class="gl-label" for="billing-state">QUẬN/HUYỆN *</label>
                                        <input readonly value="{{ $customer->district }}" class="input-text input-text--primary-style" type="text"
                                               id="billing-state"
                                               data-bill="">
                                        <!--====== End - Select Box ======-->
                                    </div>
                                    <!--====== End - STATE/PROVINCE ======-->

                                    <!--====== STATE/PROVINCE ======-->
                                    <div class="u-s-m-b-15">

                                        <!--====== Select Box ======-->

                                        <label class="gl-label" for="billing-state">PHƯỜNG/XÃ *</label>
                                        <input readonly value="{{ $customer->village }}" class="input-text input-text--primary-style" type="text"
                                               id="billing-state"
                                               data-bill="">
                                        <!--====== End - Select Box ======-->
                                    </div>
                                    <!--====== End - STATE/PROVINCE ======-->

                                    <!--====== Street Address ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="billing-street">TOÀ NHÀ/TÊN ĐƯỜNG *</label>

                                        <input readonly value="{{ $customer->street }}" class="input-text input-text--primary-style" type="text"
                                               id="billing-street"
                                               placeholder="Địa chỉ toà nhà/tên đường" data-bill="">
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <h1 class="checkout-f__h1">THÔNG TIN ĐƠN HÀNG</h1>

                            <!--====== Order Summary ======-->
                            <div class="o-summary">
                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__item-wrap gl-scroll" id="list-sold-items">
                                    </div>
                                </div>
                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__box">
                                        <table class="o-summary__table u-s-m-b-30">
                                            <tbody>
                                            <tr>
                                                <td>PHÍ VẬN CHUYỂN</td>
                                                <td id="shippingFee">0 VND</td>
                                            </tr>
                                            <tr>
                                                <td>TỔNG TIỀN HÀNG</td>
                                                <td id="subtotal">0 VND</td>
                                            </tr>
                                            <tr>
                                                <td>TỔNG THANH TOÁN</td>
                                                <td id="grantotal">0 VND</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <form id="submitForm" action="{{ route('frontend.checkout.create') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                                            <div>
                                                <button class="btn btn--e-brand-b-2" type="submit">ĐẶT HÀNG</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--====== End - Order Summary ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 3 ======-->
@endsection
