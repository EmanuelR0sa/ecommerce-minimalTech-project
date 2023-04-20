<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIMALTECH_Cart</title>
    <link rel="stylesheet" href="./css/MINIMALTECH.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body class= "cartBodyContainer">
        <header class="page-header">
            <?php
            include './header.php';
            ?>
        </header>
        <main class="cartMainContainer">
           <div id="label" class="text-center"></div>
           <div class="shopping-cart" id="shopping-cart"></div>
        </main>
        <footer class="page-footer">
            <?php
            include './footer.php';
            ?>
        </footer>
    <script src="./js/data.js"></script>
    <script src="./js/cart.js"></script>
</body>

</html>