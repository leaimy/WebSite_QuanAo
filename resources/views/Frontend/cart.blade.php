@extends('Frontend.app')

@section('title')
    Shop Bạch Tuyết 🐇 | Giỏ hàng
@endsection

@section('style')
@endsection

@section('script')
    <script src="{{ asset('frontend/js/cart.js') }}"></script>

    <script>
        let savedProduct = loadLocalStorage();

        const cartItemContainer = document.getElementById('cart-item-container');
        const shippingFeeElement = document.getElementById('shipping-fee');
        const subtotalElement = document.getElementById('subtotal');
        const totalElement = document.getElementById('total');

        const receiveAtStoreRadioElement = document.getElementById('cash-on-delivery');
        const shipppingRadioElement = document.getElementById('direct-bank-transfer');

        renderCartList();
        renderSubtotal();

        window.onCartItemRemove = renderCartList;

        function renderCartList() {
            savedProduct = loadLocalStorage();
            if (Object.keys(savedProduct).length === 0) {
                document.getElementById('empty-cart').hidden = false;
                document.getElementById('full-cart').hidden = true;
            }
            else {
                document.getElementById('full-cart').hidden = false;
                document.getElementById('empty-cart').hidden = true;
                renderCart();
            }
        }

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
            <tr>
                <td>
                    <div class="table-p__box">
                        <div class="table-p__img-wrap">
                            <img class="u-img-fluid" src="${image}" alt="">
                        </div>
                        <div class="table-p__info">
                            <span class="table-p__name">
                                <a href="product-detail.html">${name}</a>
                            </span>
                            <span class="table-p__category">
                                <a href="shop-side-version-2.html">${category.name}</a>
                            </span>
                            <ul class="table-p__variant-list">
                                <li>
                                    <span>Kích thước: ${size}</span>
                                </li>
                                <li>
                                    <span>Màu sắc: ${color}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="table-p__price" id="total-price-${id}">${price * quantity}</span>
                </td>
                <td>
                    <div class="table-p__input-counter-wrap">
                        <div class="input-counter">
                            <span class="input-counter__minus fas fa-minus" onclick="decreaseQuantity(${productID}, ${id}, ${price})"></span>
                            <input id="${id}" class="input-counter__text input-counter--text-primary-style" type="text" value="${quantity}" data-min="1" data-max="1000">
                            <span class="input-counter__plus fas fa-plus" onclick="increaseQuantity(${productID}, ${id}, ${price})"></span>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="table-p__del-wrap">
                        <a class="far fa-trash-alt table-p__delete-link" href="javascript:;" onclick="deleteProductModel(${productID}, ${id})"></a>
                    </div>
                </td>
            </tr>
            `;
        }

        function increaseQuantity(productID, modelID, unitPrice) {
            if (!savedProduct) return;
            if (!savedProduct[productID]) return;
            if (!savedProduct[productID][modelID]) return;

            const currentValue = document.getElementById(modelID).value*1;
            document.getElementById(modelID).value = currentValue + 1;

            document.getElementById('total-price-'+modelID).innerHTML = ((currentValue+1) * unitPrice).toString();

            savedProduct[productID][modelID].quantity += 1;
            saveToLocalStorage(savedProduct);
            renderMiniCartModal();
            renderSubtotal();
        }

        function decreaseQuantity(productID, modelID, unitPrice) {
            if (!savedProduct) return;
            if (!savedProduct[productID]) return;
            if (!savedProduct[productID][modelID]) return;

            const currentValue = document.getElementById(modelID).value*1;
            if (currentValue > 1) {
                document.getElementById(modelID).value = document.getElementById(modelID).value*1 - 1;
                document.getElementById('total-price-'+modelID).innerHTML = ((currentValue-1) * unitPrice).toString();

                savedProduct[productID][modelID].quantity -= 1;
                saveToLocalStorage(savedProduct);
                renderMiniCartModal();
                renderSubtotal();
            }
        }

        function deleteProductModel(productID, modelID) {
            if (!savedProduct) return;
            if (!savedProduct[productID]) return;
            if (!savedProduct[productID][modelID]) return;

            delete savedProduct[productID][modelID];

            const obj = savedProduct[productID];
            if (obj && Object.keys(obj).length === 0 && obj.constructor === Object)
                delete savedProduct[productID];

            saveToLocalStorage(savedProduct);
            renderCartList();
            renderMiniCartModal();
            renderSubtotal();
        }

        document.getElementById('clear-cart').addEventListener('click', () => {
            savedProduct = {};
            saveToLocalStorage(savedProduct);
            renderCartList();
            renderMiniCartModal();
            renderSubtotal();
        });

        receiveAtStoreRadioElement.addEventListener('input', () => {
            if (receiveAtStoreRadioElement.checked) {
                shippingFeeElement.innerHTML = '0 VND';
                window.localStorage.setItem('shipping', JSON.stringify(false));
                renderFinalCost();
            }
        })

        shipppingRadioElement.addEventListener('input', () => {
            if (shipppingRadioElement.checked) {
                shippingFeeElement.innerHTML = '35000 VND';
                window.localStorage.setItem('shipping', JSON.stringify(true));
                renderFinalCost();
            }
        })

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
        }
    </script>
@endsection

@section('content')
    <div id="empty-cart" hidden>
        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">
            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 u-s-m-b-30">
                            <div class="empty">
                                <div class="empty__wrap">
                                    <span class="empty__big-text">TRỐNG</span>

                                    <span class="empty__text-1">Hiện tại không có sản phẩm nào trong giỏ hàng</span>

                                    <a class="empty__redirect-link btn--e-brand" href="{{ route('frontend.index') }}">TIẾP TỤC MUA HÀNG 🛒</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 1 ======-->
    </div>

    <div id="full-cart" hidden>
        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="breadcrumb">
                        <div class="breadcrumb__wrap">
                            <ul class="breadcrumb__list">
                                <li class="has-separator">
                                    <a href="{{ route('frontend.index') }}">Trang chủ</a></li>
                                <li class="is-marked">

                                    <a href="{{ route('frontend.cart') }}">Giỏ hàng</a></li>
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
                                <h1 class="section__heading u-c-secondary">GIỎ HÀNG 🛒</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                            <div class="table-responsive">
                                <table class="table-p">
                                    <tbody id="cart-item-container">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="route-box">
                                <div class="route-box__g1">

                                    <a class="route-box__link" href="{{ route('frontend.index') }}"><i class="fas fa-long-arrow-alt-left"></i>

                                        <span>TIẾP TỤC MUA SẮM</span></a></div>
                                <div class="route-box__g2">

                                    <a class="route-box__link" href="javascript:;" id="clear-cart">
                                        <i class="fas fa-trash"></i>
                                        <span>XOÁ TOÀN BỘ</span>
                                    </a>
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
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                            <form class="f-cart">
                                <div class="row">
                                    <div class="col u-s-m-b-30">
                                        <div class="f-cart__pad-box">
                                            <h1 class="gl-h1">CÁCH THỨC NHẬN HÀNG</h1>

                                            <span class="gl-text u-s-m-b-30">Chọn cách bạn sẽ nhận hàng của mình</span>
                                            <div>
                                                <div class="u-s-m-b-20">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" value="buy_at_store" id="cash-on-delivery" name="order_option">
                                                        <div class="radio-box__state radio-box__state--primary">
                                                            <label class="radio-box__label" for="cash-on-delivery">
                                                                Nhận tại cửa hàng
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->
                                                    <span class="gl-text u-s-m-t-6">Không phát sinh chi phí giao hàng</span>
                                                </div>
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" value="shipping" id="direct-bank-transfer" name="order_option">
                                                        <div class="radio-box__state radio-box__state--primary">
                                                            <label class="radio-box__label" for="direct-bank-transfer">
                                                                Ship/COD
                                                            </label>
                                                            <span class="gl-text u-s-m-t-6">Phát sinh 35K phí giao hàng chuẩn</span>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col u-s-m-b-30">
                                        <div class="f-cart__pad-box">
                                            <div class="u-s-m-b-30">
                                                <table class="f-cart__table">
                                                    <tbody>
                                                    <tr>
                                                        <td>Phí vận chuyển</td>
                                                        <td id="shipping-fee">0 VND</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tổng tiền hàng</td>
                                                        <td id="subtotal">0 VND</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tổng thanh toán</td>
                                                        <td id="total">0 VND</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div>
                                                <a href="{{ route('frontend.checkout') }}" class="btn btn--e-brand-b-2" type="submit" id="btn-checkout"> THANH TOÁN NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 3 ======-->
    </div>
@endsection
