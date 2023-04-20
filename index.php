<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIMALTECH</title>
    <link rel="stylesheet" href="./css/MINIMALTECH.css">
</head>

<body>

    <div class="container">
          
        <header class="page-header">
            <?php
            include './header.php';
            ?>
        </header>

           
    <main class="page-main">
        <div class="content">
            <div class="content-box1">
                <h1 id="Text-Minimal-title">MINIMAL TECH</h1>
                <p id="Text-Minimal-content"> The power of tecnology and good design in your hands! </p>
            </div>

            <div class="content-box2">
                <p id="laptop-title"> XPS 13 Plus Laptop</p>
                <img id="xps13" height=200px src="./img/DELLXPS1302.png " alt="xps13">
                <p id="laptop-text"> The Speed of Creativity</p>
                <a href="Laptop.php"><button type="button" class="buttonIcon" id="ShopHere"> Buy Now</button></a>
            </div>
        </div>

    </main>
    <footer class="page-footer">
        <?php
        include './footer.php';
        ?>
    </footer>
    <video autoplay muted loop class="vrVideo">
           <source src="./img/pexels-shvets-production-7547023.mp4" type="video/mp4">
    </div>
    <script src="./js/data.js"></script>
    <script src="./js/cart.js"></script>
</body>

</html>