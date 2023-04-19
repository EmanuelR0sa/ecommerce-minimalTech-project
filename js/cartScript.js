const laptopQuantity = document.getElementById('laptopQuantity');
const laptopCost = document.getElementById('laptopCost');

let laptopsPurchased = parseInt(localStorage.getItem('cartNumbers'));
let laptopsTotal = parseInt(localStorage.getItem('TotalCost'));
laptopQuantity.innerText = laptopsPurchased;
laptopCost.innerText =laptopsTotal;