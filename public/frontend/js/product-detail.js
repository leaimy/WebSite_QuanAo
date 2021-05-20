const a = {
    SP101: {
        SP1011: {
            quantity: 2,
            category: 'Dress',
            data: {
                ID: 'SP1011',
                size: 'S',
                color: 'Red'
            }
        },
        SP1012: {
            quantity: 1,
            category: 'Dress',
            data: {
                ID: 'SP1012',
                size: 'M',
                color: 'Yellow'
            }
        }
    }
}

class ProductModel {
    constructor(modelID, modelName, modelCategory, modelPhoto, size, color, price, quantity) {
        this.id = modelID;
        this.name = modelName;
        this.category = modelCategory;
        this.image = modelPhoto;
        this.size = size;
        this.color = color;
        this.price = price;
        this.quantity = quantity;
    }
}


function handleOnAddToCartClick(product, productDetail, category, image) {
    const quantity = document.getElementById('product-counter').value*1;

    const productID = product.id;
    const modelID = productDetail.id;

    const { size, color } = productDetail;
    const { name, sale_price } = product;

    const products = loadLocalStorage();

    if (products[productID]) {
        if (products[productID][modelID]) {
            products[productID][modelID].quantity += quantity;
        }
        else {
            products[productID][modelID] = new ProductModel(modelID, name, category, image, size, color, price, quantity);
        }
    }
    else {
        products[productID] = {};
        products[productID][modelID] = new ProductModel(modelID, name, category, image, size, color, price, quantity);
    }

    console.log(products);

    console.log(product);
    console.log(productDetail);
}
