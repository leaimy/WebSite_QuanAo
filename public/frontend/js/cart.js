const localStorageKey = 'shopping-cart';

const productContainerElement = document.getElementById('mini-product-container');
const addToCartModalElement = document.getElementById('add-to-cart-modal');
const modalOverlay = document.getElementById('modal-overlay');
const miniCartBox = document.getElementById('mini-cart-box');
const miniCartStatisticBox = document.getElementById('mini-cart-statistic-box');
const miniCartTotalItemElement = document.getElementById('mini-cart-item-count');
const miniCartSubTotal = document.getElementById('mini-cart-subtotal');

class ProductModel {
    constructor(modelID, productID, modelName, modelCategory, modelPhoto, size, color, price, quantity) {
        this.id = modelID;
        this.productID = productID;
        this.name = modelName;
        this.category = modelCategory;
        this.image = modelPhoto;
        this.size = size;
        this.color = color;
        this.price = price;
        this.quantity = quantity;
    }
}

// Init
if (!window.localStorage.getItem(localStorageKey) || window.localStorage.getItem(localStorageKey) === "undefined") {
    console.log('Init cart');
    window.localStorage.setItem(localStorageKey, JSON.stringify({}));
}

renderMiniCartModal();

function renderMiniCartModal() {
    renderMiniCart();
    renderCountItems();
    renderSubTotal();
}

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
        const modelKeys = Object.keys(products[cur]);
        return acc + modelKeys.reduce((acc1, cur1, index1) => {
            return acc1 + products[cur][cur1].quantity;
        }, 0);
    }, 0);
}

function calculateTotal() {
    const products = loadLocalStorage();
    const keys = Object.keys(products);

    return keys.reduce((acc, cur, index) => {
        const modelKeys = Object.keys(products[cur]);
        return acc + modelKeys.reduce((acc1, cur1, index1) => {
            return acc1 + products[cur][cur1].quantity * products[cur][cur1].price;
        }, 0);
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

        const currentProduct = products[key];
        const firstModel = currentProduct[Object.keys(currentProduct)[0]];

        const productID = firstModel.productID;
        const category = firstModel.category.name;
        const name = firstModel.name;
        const image = window.location.origin + '/' + firstModel.image;
        const price = firstModel.price;

        const quantity = Object.keys(currentProduct).reduce((acc, key, idx) => {
            return acc + currentProduct[key].quantity;
        }, 0);

        return createMiniProductHTML(productID, category, name, image, quantity, price);
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

function removeFromCart(id) {
    const products = loadLocalStorage();
    console.log(products);
    console.log(id);
    delete products[id];
    saveToLocalStorage(products);
    renderCountItems();
    renderMiniCart();
    renderSubTotal();

    if (window.onCartItemRemove) window.onCartItemRemove();
}
