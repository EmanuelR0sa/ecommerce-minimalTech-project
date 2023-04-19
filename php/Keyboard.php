<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIMALTECH_Shop_keyboard</title>
    <link rel="stylesheet" href="./css/MTSTYLE_Slide.css">
</head>
<body>
<div class="containerShopLaptop">
        <header class="page-header">
            <?php
            include './header.php';
            ?>
        </header>
        <main class="mainContainer">
        <div class="subnav"> 
            <a href="Laptop.php"> <img  id="subNavLaptopIcon"  src="./img/laptop-icon-white.png " alt="laptop-icon"></a> 
            <a href="Camera.php"> <img id="subNavCameraIcon"  src="./img/camera-drone-icon-white.png " alt="camera-icon"></a>
            <a href="VR.php"><img  id="subNavVrIcon"  src="./img/vr-headset-icon-white.png" alt="vr-icon"></a>   
            </div>
            <article class="article-Box">
                <div class="containerSlideshow">
                    <div class="mySlides">
                        <div class="numbertext">1 / 4</div>
                        <img class="slideImg" id="keyboard" src="./img/LOGITECH MX KEYS MINI01.png " alt="Logitech MX Keys Mini">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">2 / 4</div>
                        <img class="slideImg" id="keyboard02" src="./img/LOGITECH MX KEYS MINI02.png " alt="Logitech MX Keys Mini">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">3 / 4</div>
                        <img class="slideImg" id="keyboard03" src="./img/LOGITECH MX KEYS MINI03.png " alt="Logitech MX Keys Mini">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">4 / 4</div>
                        <img class="slideImg" id="keyboard04" src="./img/LOGITECH MX KEYS MINI04.png " alt="Logitech MX Keys Mini">
                    </div>
                   
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>

                    <div class="row">
                        <div class="column">
                            <img class="demo cursor" src="./img/LOGITECH MX KEYS MINI01.png" onclick="currentSlide(1)" alt="Logitech MX Keys Mini">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/LOGITECH MX KEYS MINI02.png" onclick="currentSlide(2)" alt="Logitech MX Keys Mini">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/LOGITECH MX KEYS MINI03.png" onclick="currentSlide(3)" alt="Logitech MX Keys Mini">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/LOGITECH MX KEYS MINI04.png" onclick="currentSlide(4)" alt="Logitech MX Keys Mini">
                        </div>
                        
                    </div>
                </div>

                <div class="productContent-Box">
                    <h2 id="productName"> MX Keys Mini Keyboard</h2>
                    <p id="productBrand"> Logitech </p>
                    <table>
                        <tr>
                            <td id="text-Product-Name ">Dimensions</td>
                            <td id="text-Product-Specification">131.95x295.99x20.97mm ( HxWxD )</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Connectivity</td>
                            <td id="text-Product-Specification">Bluetooth</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Colour</td>
                            <td id="text-Product-Specification">Graphite</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Operating System</td>
                            <td id="text-Product-Specification">Linux, Chrome OS, Windows, macOS </td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Special feature</td>
                            <td id="text-Product-Specification">Ergonomic, Backlit</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Compatibility</td>
                            <td id="text-Product-Specification">Compatible with Logi Bolt USB Receiver </td>
                        </tr>
                    </table>
                    <div class="productContent-Box" id="shop-Elements"> 
                    <button class="btnIcon add-cart" id="btn-CartKey">Add to Cart</button>
                    <p id="product-Price">&euro;119</p>
                    </div>
                </div>

            </article>
        </main>
        <footer class="page-footer">
            <?php
            include './footer.php';
            ?>
        </footer>
    </div>
    <script src="./js/MTSCRIPT_Slideshow.js"></script>
    <script src="./js/MTSCRIPT_Cart.js"></script>
</body>
</html>