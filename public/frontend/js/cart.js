const localStorageKey = 'shopping-cart';

const productContainerElement = document.getElementById('mini-product-container');
const addToCartModalElement = document.getElementById('add-to-cart-modal');
const modalOverlay = document.getElementById('modal-overlay');
const miniCartBox = document.getElementById('mini-cart-box');
const miniCartStatisticBox = document.getElementById('mini-cart-statistic-box');
const miniCartTotalItemElement = document.getElementById('mini-cart-item-count');
const miniCartSubTotal = document.getElementById('mini-cart-subtotal');

class MiniProduct {
    constructor(id, name, category, image, quantiy, price) {
        this.id = id;
        this.name = name;
        this.category = category;
        this.image = image;
        this.quantity = quantiy;
        this.price = price;
    }
}

// Init
if (!window.localStorage.getItem(localStorageKey) || window.localStorage.getItem(localStorageKey) === "undefined") {
    console.log('Init cart');
    window.localStorage.setItem(localStorageKey, JSON.stringify({}));
}
renderMiniCart();
renderCountItems();
renderSubTotal();

function createMiniProductHTML(id, productCat, productName, productImage, quantity, price) {
    return `
        <div class="card-mini-product">
            <div class="mini-product">
                <div class="mini-product__image-wrapper">
                    <a class="mini-product__link" href="product-detail.html">

                        <img class="u-img-fluid"
                             src="${productImage}"
                             alt="">
                    </a>
                </div>
                <div class="mini-product__info-wrapper">
                        <span class="mini-product__category">
                            <a href="shop-side-version-2.html">${productCat}</a>
                        </span>

                    <span class="mini-product__name">

                            <a href="product-detail.html">${productName}</a></span>

                    <span class="mini-product__quantity">${quantity} x</span>

                    <span class="mini-product__price">${price} VND</span></div>
            </div>

            <a class="mini-product__delete-link far fa-trash-alt" onclick="removeFromCart(${id})"></a>
        </div>
    `;
}

function loadLocalStorage() {
    if (window.localStorage.getItem(localStorageKey) === "undefined") {return {};}
    return JSON.parse(window.localStorage.getItem(localStorageKey));
}

function saveToLocalStorage(obj) {
    window.localStorage.setItem(localStorageKey, JSON.stringify(obj));
}

function countItems() {
    const products = loadLocalStorage();
    const keys = Object.keys(products);

    return keys.reduce((acc, cur, index) => {
        return acc + products[keys[index]].quantity;
    }, 0);
}

function calculateTotal() {
    const products = loadLocalStorage();
    const keys = Object.keys(products);

    return keys.reduce((acc, cur, index) => {
        return acc + (products[keys[index]].quantity * products[keys[index]].price);
    }, 0);
}

function renderMiniCart() {
    const products = loadLocalStorage();
    if (Object.keys(products).length === 0) {
        productContainerElement.innerHTML = `
            <h5>Giỏ hàng trống</h5>
        `;
        miniCartStatisticBox.hidden = true;
        return;
    }

    miniCartStatisticBox.hidden = false;
    const HTMLs = Object.keys(products).map(key => {
        const { id, name, category, image, quantity, price } = products[key];
        return createMiniProductHTML(id, category, name, image, quantity, price);
    });

    productContainerElement.innerHTML = HTMLs.join('');
}

function renderCountItems() {
    if (countItems() > 0) {
        miniCartTotalItemElement.innerHTML = countItems().toString();
        miniCartTotalItemElement.hidden = false;
    }
    else
        miniCartTotalItemElement.hidden = true;
}

function renderSubTotal() {
    miniCartSubTotal.innerHTML = calculateTotal().toString();
}

function addToCart(id, productCat, productName, productImage, quantity, price) {

    const products = loadLocalStorage();

    if (products[id]) {
        products[id].quantity += (quantity*1);
    }
    else {
        products[id] = new MiniProduct(id, productName, productCat, productImage, quantity, price);
    }

    saveToLocalStorage(products);
    renderCountItems();
    renderMiniCart();
    renderSubTotal();
}

function removeFromCart(id) {
    const products = loadLocalStorage();
    delete products[id];
    saveToLocalStorage(products);
    renderCountItems();
    renderMiniCart();
    renderSubTotal();
}

function handleOnAddToCartClick(productID, productCategory, productName, productImage, productQuantity, productPrice) {
    showAddToCartModal(productName, productImage, productQuantity, productPrice);
    addToCart(productID, productCategory, productName, productImage, productQuantity, productPrice);
}

function showAddToCartModal(productName, productImage, productQuantity, productPrice) {
    addToCartModalElement.querySelector('#atc-modal-name').innerHTML = productName;
    addToCartModalElement.querySelector('#atc-modal-image').setAttribute('src', productImage);
    addToCartModalElement.querySelector('#atc-modal-quantity').innerHTML = productQuantity;
    addToCartModalElement.querySelector('#atc-modal-price').innerHTML = productPrice;

    document.body.classList.add('modal-open');
    document.body.style.paddingRight = '17px';

    addToCartModalElement.classList.add('show');
    addToCartModalElement.setAttribute('aria-modal', 'true');
    addToCartModalElement.style.display = 'block';
    addToCartModalElement.style.paddingRight = '17px';

    modalOverlay.classList.add('modal-backdrop', 'fade', 'show');
    if (!modalOverlay.onclick);
        modalOverlay.onclick = closeAddToCartModal;
}

function closeAddToCartModal() {
    document.body.classList.remove('modal-open');
    document.body.setAttribute('style', '');

    addToCartModalElement.classList.remove('show');
    addToCartModalElement.setAttribute('style', '')
    addToCartModalElement.style.display = 'none';
    addToCartModalElement.removeAttribute('aria-modal');
    addToCartModalElement.setAttribute('aria-hidden', 'true');

    modalOverlay.setAttribute('class', '');
}

// CART PAGE
(function () {
    const emptyCartElement = document.getElementById('empty-cart');
    const fullCartElement = document.getElementById('full-cart');

    if (!emptyCartElement || !fullCartElement) return;

    const products = loadLocalStorage();

    if (Object.keys(products).length === 0) {
        emptyCartElement.removeAttribute('hidden');
    }
    else {
        fullCartElement.removeAttribute('hidden');
    }
})()
