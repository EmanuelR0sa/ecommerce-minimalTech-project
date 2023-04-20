let label = document.getElementById('label');
let shoppingCart = document.getElementById('shopping-cart');
let basket = JSON.parse(localStorage.getItem('data')) || [];

let calculation = () => {
    let cartIcon = document.getElementById("cartSpan");
    console.log(basket.map((x) => x.id));

    cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);

};
calculation();

let generateCartItems = () => {
    if (basket.length !== 0) {
        return shoppingCart.innerHTML = basket.map((x) => {
            let { id, item } = x;
            let search = shopItemData.find((y) => y.id === id) || [];
            let { img, name, price } = search;
            return ` 
        <div class="cart-item"> 
            <div class="cart-img-item">
            <img width="150" src=${img} alt="">
            </div>
            
            <div class="details">
            
            <div class="title-price-x">
            <h4 class="title-price"> 
            <p> ${name}</p>
            <p class="cart-item-price"> &euro; ${price}</p>
            <i onclick= "removeItem(${id})" class="bi bi-trash3""></i>
            </h4>
            </div>
            <div class="quantityItem">
            <p> Qty: </p>
            <button class="btn-cart-item">
             <i onclick="decrement(${id})" class="bi bi-dash-circle"></i>
             <div id=${id} class="quantity">${item} </div>
             <i onclick="increment(${id})" class="bi bi-plus-circle"></i>
            </button>
            </div>
            <div class="itemSub">
            <p> Item Subtotal: </p>
            <h3  class="itemPrice"> &euro; ${item * search.price} </h3>
            </div>
            </div>
        </div>
            `;
        })
            .join('');

    } else {
        shoppingCart.innerHTML = ``
        label.innerHTML = ` 
        <h2> Cart is Empty</h2>
        <a href="index.php">
        <button class='HomeBtn'> Home </button>
        </a>
        `  ;
    }
};
generateCartItems();

let increment = (id) => {
    let selectedItem = id;
    let search = basket.find((x) => x.id === selectedItem.id);

    if (search === undefined) {
        basket.push({
            id: selectedItem.id,
            item: 1,
        });
    } else {
        search.item += 1;
    }

    generateCartItems();
    update(selectedItem.id);
    localStorage.setItem('data', JSON.stringify(basket));
};

let decrement = (id) => {
    let selectedItem = id;
    let search = basket.find((x) => x.id === selectedItem.id);
    if (search.item === undefined) return;
    else if (search.item === 0) return;
    else {
        search.item -= 1;
    }
    update(selectedItem.id);
    basket = basket.filter((x) => x.item !== 0);
    generateCartItems();

    localStorage.setItem('data', JSON.stringify(basket));
};

let update = (id) => {
    let search = basket.find((x) => x.id === id);
   
    document.getElementById(id).innerHTML = search.item;
    calculation();
    TotalAmount();
};

let removeItem = (id) => {
    let selectedItem = id
   
    basket = basket.filter((x) => x.id !== selectedItem.id);
    generateCartItems();
    TotalAmount();
    calculation();
    localStorage.setItem('data', JSON.stringify(basket));
};

let clearCart = () => {
    basket = [];
    generateCartItems();
    calculation();
    localStorage.setItem('data', JSON.stringify(basket));
};

let TotalAmount = (id) => {
    if (basket.length !== 0) {
        let amount = basket.map((x) => {
            let { item, id } = x;
            let search = shopItemData.find((y) => y.id === id) || [];
            return item * search.price;
        }).reduce((x, y) => x + y, 0);
     
        label.innerHTML = ` <h2 class='totalBillText' > Total Bill:&euro; ${amount} </h2> 

<button class='checkout'>Checkout</button>
<button onclick="clearCart()" class='removeAll'>Clear Cart</button>
`;
    } else return
};

TotalAmount();