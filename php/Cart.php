<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIMALTECH_Cart</title>
    <link rel="stylesheet" href="./css/MINIMALTECH.css">
</head>

<body class= "cartBodyContainer">
    <div class="containerCart">
        <header class="page-header">
            <?php
            include './header.php';
            ?>
        </header>
        <main class="cartMainContainer">
            <article class="cart-Box">
                <h1 id="cart-Title"> Cart </h1>
                <table id="table-Box">
                    <tr id="table-Head">
                        <th>Items</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    
                    <tr id="table-Row">
                        <td id="text-Product-Name"><img src="./img/DELLXPS1302.png" alt="dellxps13"> XPS 13 Plus Laptop</td>
                        <td id="text-Product-Quantity"><span id="laptopQuantity"> 0 </span></td>
                        <td id="text-Product-Cost">&euro;1999</td>
                    </tr>
                    <tr id="table-Row-Total">
                    <td></td>
                    <td></td>
                    <td id="text-Product-Total">Total:&euro; <span id="laptopCost">0 </span></td> 
                    </tr>
                   
                </table>
            </article>
        </main>
        <footer class="page-footer">
            <?php
            include './footer.php';
            ?>
        </footer>
    </div>
    <script src="./js/cartScript.js"></script>
    <script src="./js/MTSCRIPT_Cart.js"></script>
</body>

</html>