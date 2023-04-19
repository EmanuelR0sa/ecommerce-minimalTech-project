<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIMALTECH_Shop</title>
    <link rel="stylesheet" href="./css/MINIMALTECH.css">
</head>

<body>
    <div class="containerShop">
        <header class="page-header">
            <?php
            include './header.php';
            ?>
        </header>

        <main class="page-main-shop">

        <div class="shop-box"> 
        <a href="Laptop.php"><img class="growable" id="laptopIcon"  src="./img/laptop-icon-white.png " alt="account-icon"></a>
        <p id="Text-icon"> Laptop</p>
        </div>
        <div class="shop-box"> 
        <a href="Camera.php"><img class="growable" id="cameraIcon"  src="./img/camera-drone-icon-white.png " alt="camera-icon"></a>
        <p> Camera</p>
        </div>
        <div class="shop-box"> 
        <a href="Keyboard.php"><img class="growable" id="keyboardIcon"  src="./img/keyboard-icon-white.png " alt="keyboard-icon"></a>
        <p> Keyboard & Mouse</p>
        </div>
        <div class="shop-box"> 
        <a href="VR.php"><img class="growable" id="vrIcon"  src="./img/vr-headset-icon-white.png" alt="vr-icon"></a>
        <p> VR</p>
        </div>
        </main>

        <footer class="page-footer">
            <?php
            include './footer.php';
            ?>
        </footer>
    </div>
    <script src="./js/MTSCRIPT_Cart.js"></script>
</body>

</html>