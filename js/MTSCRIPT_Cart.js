let carts = document.querySelectorAll('.add-cart');

let products = [{
    name: 'XPS 13 Plus Laptop ',
    tag: 'XPS13Laptop',
    price: 1999,
    inCart: 0,
    index: 1
},

{
    name: 'Mavic 3 Classic',
    tag: 'Mavic',
    price: 1500,
    inCart: 0,
    index: 2
},

{
    name: 'MX Keys Mini Keyboard',
    tag: 'miniKeyboard',
    price: 119,
    inCart: 0,
    index: 3
},

{
    name: 'Meta Quest 2 Headset',
    tag: 'Headset',
    price: 455,
    inCart: 0,
    index: 4
},

];


for (let i = 0; i < carts.length; i++) {
    console.log(i);
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    });
}


//function to iguals number from local storage
function onLoadCartNumber() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if (productNumbers) { document.querySelector('.iconsbox span').textContent = productNumbers; }

}

function cartTotal() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if (productNumbers) { document.querySelector('.iconsbox span').textContent = productNumbers; }

}



function cartNumbers() {
//console.log(products);
 
    let productNumbers = localStorage.getItem('cartNumbers', 1);
    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        console.log(productNumbers);
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.iconsbox span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.iconsbox span').textContent = 1;
    }
      
}


function totalCost(product) {
    let cartCost = localStorage.getItem('TotalCost');
    
  

    if (cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem('TotalCost', cartCost + product.price);
    } else {
        localStorage.setItem('TotalCost', product.price);

    }

}

onLoadCartNumber(products);