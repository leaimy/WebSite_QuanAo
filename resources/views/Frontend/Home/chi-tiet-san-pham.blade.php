@extends('Frontend.app')

@section('style')
    <style>
        #btn-add-to-cart {
            transition-duration: 500ms;
        }

        #btn-add-to-cart:disabled {
            background-color: #333;
            border-color: #333;
            cursor: not-allowed;
        }

        #product-counter-box {
            transition: opacity;
            transition-duration: 500ms;
        }
    </style>
@endsection

@section('script')

    <script src="{{ asset('frontend/js/cart.js') }}"></script>

    <script>

    </script>

    <script>
        const productModels = (@json($productdetails));
        const product = (@json($product));
        const categories = (@json($categories));

        const modelQuantity = document.getElementById('model-quantity');
        const totalQuantity = document.getElementById('total-quantity');
        const modelAvaiable = document.getElementById('avaiable-product-count');

        const btnAddToCart = document.getElementById('btn-add-to-cart');
        const productCounterBox = document.getElementById('product-counter-box');

        const sizeElementBoxes = Array.from(document.querySelectorAll('.size-element'));
        const colorElementBoxes = Array.from(document.querySelectorAll('.color-element'));

        console.log(productModels);

        let currentColor = document.querySelector('input[name="color"]:checked').value;
        let currentSize = null;

        totalQuantity.innerHTML = getTotalQuantity();
        renderModelAvaiable();
        renderSizeBoxesStatus();
        attachEventListener();

        btnAddToCart.disabled = true;
        productCounterBox.style.opacity = '0';

        function renderModelAvaiable() {
            if (!currentColor) {
                modelAvaiable.innerHTML = 'Vui lòng chọn màu sắc';
                return;
            }

            if (!currentSize) {
                modelAvaiable.innerHTML = 'Vui lòng chọn kích thước';
                return;
            }

            const quantity = getModelQuantity(currentSize, currentColor);
            if (quantity === 0) {
                modelAvaiable.innerHTML = 'Sản phẩm không có sẵn';
                productCounterBox.style.opacity = '0';
            }
            else {
                modelAvaiable.innerHTML = quantity + ' sản phẩm có sẵn';
                productCounterBox.style.opacity = '1';
            }
        }

        function attachEventListener() {
            const allSizeElements = Array.from(document.querySelectorAll('input[name="size"]'));
            const allColorElements = Array.from(document.querySelectorAll('input[name="color"]'));
            const btnIncrease = document.getElementById('btn-increase');
            const btnDescrease = document.getElementById('btn-decrease');
            const inputCounter = document.getElementById('product-counter');

            allSizeElements.forEach(e => {
                e.addEventListener('click', () => {
                    currentSize = document.querySelector('input[name="size"]:checked').value;
                    const quantity = getModelQuantity(currentSize, currentColor);
                    modelQuantity.innerHTML = quantity;
                    renderModelAvaiable();

                    if (quantity > 0) {
                        btnAddToCart.disabled = false;
                    }
                    else {
                        btnAddToCart.disabled = true;
                    }

                    const currentValue = inputCounter.value*1;
                    btnAddToCart.disabled = currentValue > getModelQuantity(currentSize, currentColor);
                });
            })
            allColorElements.forEach(e => {
                e.addEventListener('click', () => {
                    currentColor = document.querySelector('input[name="color"]:checked').value;
                    const quantity = getModelQuantity(currentSize, currentColor);
                    renderSizeBoxesStatus();
                    renderModelAvaiable();

                    if (quantity > 0) {
                        btnAddToCart.disabled = false;
                    }
                    else {
                        btnAddToCart.disabled = true;
                    }

                    const currentValue = inputCounter.value*1;
                    btnAddToCart.disabled = currentValue > getModelQuantity(currentSize, currentColor);
                });
            })
            btnIncrease.addEventListener('click', () => {
                const currentValue = inputCounter.value*1;
                btnAddToCart.disabled = currentValue > getModelQuantity(currentSize, currentColor);
            });
            btnDescrease.addEventListener('click', () => {
                const currentValue = inputCounter.value*1;
                btnAddToCart.disabled = currentValue > getModelQuantity(currentSize, currentColor);
            })
        }

        function renderSizeBoxesStatus() {

            if (!currentColor) return;

            for (const element of sizeElementBoxes) {
                const size = element.querySelector('input').value;

                const quantity = getModelQuantity(size, currentColor);
                if (quantity === 0) {
                    element.querySelector('label').style.backgroundColor = '#eee';
                }
                else {
                    element.querySelector('label').style.backgroundColor = '#fff';
                }
            }
        }

        function getModelQuantity(size, color) {
            if (!size || !color) return 0;

            const uniqueStr = getUniqueSearchString(size, color);
            const model = productModels.find(m => m.unique_search_id === uniqueStr);

            if (model) return model.quantity;
            return 0;
        }

        function getTotalQuantity() {
            return productModels.reduce((acc, cur, idx) => {
                return acc + cur.quantity;
            }, 0);
        }

        function getUniqueSearchString(size, color) {
            size = nonAccentVietnamese(size);
            color = nonAccentVietnamese(color);

            let str = size + color;
            str = str.split('').sort().join('');
            return str;
        }

        function nonAccentVietnamese(str) {
            str = str.toLowerCase();
            str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
            str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
            str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
            str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
            str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
            str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
            str = str.replace(/đ/g, "d");
            // Some system encode vietnamese combining accent as individual utf-8 characters
            str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // Huyền sắc hỏi ngã nặng
            str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // Â, Ê, Ă, Ơ, Ư
            return str;
        }

        // ADD TO CART
        btnAddToCart.addEventListener('click', () => {
            if (!currentSize || !currentColor || getModelQuantity(currentSize, currentColor) <= 0) {
                return;
            }

            console.log(currentSize);
            console.log(currentColor);

            const uniqueStr = getUniqueSearchString(currentSize, currentColor);

            const currentModel = productModels.find(m => m.unique_search_id === uniqueStr);
            if (!currentModel) {
                console.log('Khong tim thay model');
                return;
            }

            if (!product) {
                console.log('Khong tim thay product');
                return;
            }

            if (!categories) {
                console.log('Khong tim thay danh sach nhom');
                return;
            }

            const currentCategory = categories.find(c => c.id === product.category_id);
            if (!currentCategory) {
                console.log('Khong tim thay category');
                return;
            }

            const productCounter = document.getElementById('product-counter').value * 1;
            if (productCounter <= 0) {
                return;
            }

            console.log(currentModel);
            console.log(product);
            console.log(currentCategory);
            console.log(productCounter);

            const productID = product.id;
            const modelID = currentModel.id;
            const modelName = product.name;
            const modelPhoto = product.preview_image_path;
            const modelSize = currentModel.size;
            const modelColor = currentModel.color;
            const modelPrice = product.sale_price;

            const savedProduct = loadLocalStorage();

            if (savedProduct[productID]) {
                if (savedProduct[productID][modelID]) {
                    savedProduct[productID][modelID].quantity = productCounter;
                } else {
                    savedProduct[productID][modelID] = new ProductModel(modelID, product.id, modelName, currentCategory, modelPhoto, modelSize, modelColor, modelPrice, productCounter);
                }
            }
            else {
                savedProduct[productID] = {};
                savedProduct[productID][modelID] = new ProductModel(modelID, product.id, modelName, currentCategory, modelPhoto, modelSize, modelColor, modelPrice, productCounter);
            }

            saveToLocalStorage(savedProduct);
            renderMiniCartModal();
        });
    </script>

@endsection

@section('content')
    <div class="u-s-p-t-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">

                    <!--====== Product Breadcrumb ======-->
                    <div class="pd-breadcrumb u-s-m-b-30">
                        <ul class="pd-breadcrumb__list">
                            <li class="has-separator">

                                <a href="{{route('frontend.index')}}">Trang chủ</a></li>

                            <li class="has-separator">
                                <a href="shop-side-version-2.html">{{ \App\Category::find($product->category_id)->name }}</a>
                            </li>

                            <li class="is-marked">
                                <a href="shop-side-version-2.html">{{$product->name}}</a></li>
                        </ul>
                    </div>
                    <!--====== End - Product Breadcrumb ======-->


                    <!--====== Product Detail Zoom ======-->
                    <div class="pd u-s-m-b-30">
                        <div class="slider-fouc pd-wrap">
                            <div id="pd-o-initiate">
                                @foreach($productimages as $image)
                                    <div class="pd-o-img-wrap" data-src="{{asset($image->path)}}">
                                        <img class="u-img-fluid" src="{{asset($image->path)}}"
                                             data-zoom-image="{{asset($image->path)}}" alt="">
                                    </div>
                                @endforeach

                            </div>

                            <span class="pd-text">Nhấp vào để phóng to hình</span>
                        </div>
                        <div class="u-s-m-t-15">
                            <div class="slider-fouc">
                                <div id="pd-o-thumbnail">
                                    @foreach($productimages as $image)
                                        <div>
                                            <img class="u-img-fluid" src="{{asset($image->path)}}" alt="">
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--====== End - Product Detail Zoom ======-->
                    </div>
                </div>
                <div class="col-lg-7">

                    <!--====== Product Right Side Details ======-->
                    <div class="pd-detail">
                        <div>

                            <span class="pd-detail__name">{{$product->name}}</span></div>
                        <div>
                            <div class="pd-detail__inline">

                                <span class="pd-detail__price">{{number_format($product->sale_price,0,'','.')}} VNĐ</span>

                            </div>
                        </div>
                        <div class="u-s-m-b-15">
                            <div class="pd-detail__rating gl-rating-style">
                                <span class="pd-detail__review u-s-m-l-4">Lượt xem: </span>
                                <span class="pd-detail__review u-s-m-l-4">{{$product->views}}</span>
                            </div>
                        </div>
                        <div class="u-s-m-b-15">
                            <div class="pd-detail__inline">

                                <span class="pd-detail__stock" id="total-quantity">{{$product->available_stock}}</span>

                                <span class="pd-detail__left" id="model-quantity">{{$productdetails[0]->quantity}}</span></div>
                        </div>
                        <div class="u-s-m-b-15">

                            <span class="pd-detail__preview-desc">{{$product->description}}</span>
                        </div>
                        <div class="u-s-m-b-15">
                            <div class="pd-detail__form">
                                <div class="u-s-m-b-15">

                                    <span class="pd-detail__label u-s-m-b-8">Màu sắc:</span>
                                    <div class="pd-detail__color">
                                        @foreach($unique_colors as $color)

                                            <div class="size__radio color-element">
                                                <input type="radio" id="color-{{ $loop->index }}" name="color" value="{{ $color }}"
                                                       @if ($loop->index == 0) checked @endif
                                                >
                                                <label class="size__radio-label" for="color-{{ $loop->index }}">{{$color}}</label>
                                            </div>

                                        @endforeach


                                    </div>
                                </div>
                                <div class="u-s-m-b-15">

                                    <span class="pd-detail__label u-s-m-b-8">Kích thước:</span>
                                    <div class="pd-detail__size">

                                        @foreach($unique_sizes as $size)

                                            <div class="size__radio size-element">
                                                <input type="radio" id="size-{{ $loop->index }}" name="size" value="{{ $size }}"
                                                >
                                                <label class="size__radio-label" for="size-{{ $loop->index }}">{{$size}}</label>
                                            </div>

                                        @endforeach
                                    </div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <span style="font-size: 14px; color: #757575;" id="avaiable-product-count"></span>
                                </div>
                                <div class="pd-detail-inline-2">
                                    <div class="u-s-m-b-15">

                                        <!--====== Input Counter ======-->
                                        <div class="input-counter" id="product-counter-box">

                                            <span id="btn-increase" class="input-counter__minus fas fa-minus"></span>

                                            <input id="product-counter" class="input-counter__text input-counter--text-primary-style"
                                                   type="text" value="1" data-min="1" data-max="1000">

                                            <span id="btn-decrease" class="input-counter__plus fas fa-plus"></span></div>
                                        <!--====== End - Input Counter ======-->
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <button id="btn-add-to-cart" class="btn btn--e-brand-b-2">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-s-m-b-15">

                            <span class="pd-detail__label u-s-m-b-8">Chính sách sản phẩm:</span>
                            <ul class="pd-detail__policy-list">
                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                    <span>Bảo vệ người mua hàng</span></li>
                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                    <span>Hoàn trả đầy đủ nếu bạn không nhận được đơn đặt hàng của mình.</span></li>
                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                    <span>Trả hàng được chấp nhận nếu sản phẩm không như mô tả.</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--====== End - Product Right Side Details ======-->
                </div>
            </div>
        </div>
    </div>

    <!--====== Product Detail Tab ======-->

    <!--====== End - Product Detail Tab ======-->
    <div class="u-s-p-b-90">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">SẢN PHẨM LIÊN QUAN</h1>

                            <span class="section__span u-c-grey">MỘT SỐ SẢN PHẨM GỢI Ý</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="slider-fouc">
                    <div class="owl-carousel product-slider" data-item="4">
                        @foreach($products as $item)
                        <div class="u-s-m-b-30">
                            <div class="product-o product-o--hover-on">
                                <div class="product-o__wrap">

                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                       href="{{route('chitietsanpham',['slug'=>$item->slug])}}">

                                        <img class="aspect__img" src="{{asset($item->preview_image_path)}}"
                                             alt="">
                                    </a>

                                </div>

                                <span class="product-o__category">

                                            <a href="shop-side-version-2.html">{{ \App\Category::find($item->category_id)->name }}</a></span>

                                <span class="product-o__name">

                                            <a href="{{route('chitietsanpham',['slug'=>$item->slug])}}">{{$item->name}}</a></span>
                                <div class="product-o__rating gl-rating-style">

                                    <span class="product-o__review"><i class="fas fa-eye"></i> {{ $item->views }}</span>
                                </div>

                                <span class="product-o__price">{{number_format($item->sale_price,0,'','.')}} VNĐ</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 1 ======-->
@endsection('content')
