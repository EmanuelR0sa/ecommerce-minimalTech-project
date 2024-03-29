let shop = document.getElementById("shopp");




let basket = JSON.parse(localStorage.getItem('data')) || [];

let generateShop = () => {
    return (shop.innerHTML = shopItemData.map((x) => {
        let { id, name, price, desc, img } = x;
        let search = basket.find((x) => x.id === id) || [];
        return `
         <div id=product-id-${id} class="item">
         <div class="item-container">
            <img  src=${img} alt="">
             <div class="ditails">
                 <h2 id="productName">${name}</h2>
                 <p>Product Description </p>
                 <p>${desc} </p>

                 <div class="price-quantity">
                     <h2> &euro; ${price}</h2>
                     <button class="btn">
                         <i onclick="decrement(${id})" class="bi bi-dash-circle"></i>
                         <div id=${id} class="quantity">
                         ${search.item === undefined ? 0 : search.item}
                         </div>
                         <i onclick="increment(${id})" class="bi bi-plus-circle"></i>
                     </button>
                 </div>
             </div>
           </div>
         </div>
         `
    }).join(""));
};

generateShop();

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


    localStorage.setItem('data', JSON.stringify(basket));
};
let update = (id) => {
    let search = basket.find((x) => x.id === id);

    document.getElementById(id).innerHTML = search.item;
    calculation();
};

let calculation = () => {
    let cartIcon = document.getElementById("cartSpan");
    console.log(basket.map((x) => x.id));

    cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);

};
calculation();

