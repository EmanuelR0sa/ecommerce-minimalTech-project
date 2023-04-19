<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIMALTECH_Shop_Laptop</title>
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
            <a href="Camera.php"> <img id="subNavCameraIcon"  src="./img/camera-drone-icon-white.png " alt="camera-icon"></a>
            <a href="keyboard.php"> <img id="subNavkeyboardIcon"  src="./img/keyboard-icon-white.png " alt="keyboard-icon"></a> 
            <a href="VR.php"><img  id="subNavVrIcon"  src="./img/vr-headset-icon-white.png" alt="vr-icon"></a>   
            </div>
            <article class="article-Box">
                <div class="containerSlideshow">
                    <div class="mySlides">
                        <div class="numbertext">1 / 5</div>
                        <img class="slideImg" id="laptop1301" src="./img/DELLXPS1301.png " alt="Dell xps 13">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">2 / 5</div>
                        <img class="slideImg" id="laptop1302" src="./img/DELLXPS1302.png " alt="Dell xps 13">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">3 / 5</div>
                        <img class="slideImg" id="laptop1303" src="./img/DELLXPS1303.png " alt="Dell xps 13">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">4 / 5</div>
                        <img class="slideImg" id="laptop1304" src="./img/DELLXPS1304.png " alt="Dell xps 13">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">5 / 5</div>
                        <img class="slideImg" id="laptop1305" src="./img/DELLXPS1305.png " alt="Dell xps 13">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>

                    <div class="row">
                        <div class="column">
                            <img class="demo cursor" src="./img/DELLXPS1301.png" onclick="currentSlide(1)" alt="Dell xps 13">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/DELLXPS1302.png" onclick="currentSlide(2)" alt="Dell xps 13">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/DELLXPS1303.png" onclick="currentSlide(3)" alt="Dell xps 13">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/DELLXPS1304.png" onclick="currentSlide(4)" alt="Dell xps 13">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/DELLXPS1305.png" onclick="currentSlide(5)" alt="Dell xps 13">
                        </div>
                    </div>
                </div>

                <div class="productContent-Box">
                    <h2 id="productName"> XPS 13 Plus Laptop</h2>
                    <p id="productBrand"> Dell</p>
                    <table>
                        <tr>
                            <td id="text-Product-Name ">Processor</td>
                            <td id="text-Product-Specification">12ᵗʰ Gen Intel® Core™ i5-1240P</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> OS</td>
                            <td id="text-Product-Specification">Windows 11 Home</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Graphics</td>
                            <td id="text-Product-Specification">Intel® Iris® Xe Graphics</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Memory</td>
                            <td id="text-Product-Specification">8 GB, LPDDR5</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Storage</td>
                            <td id="text-Product-Specification">512 GB SSD</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Display</td>
                            <td id="text-Product-Specification">13.4-in. display Full HD (1920X1200)</td>
                        </tr>
                    </table>
                    <div class="productContent-Box" id="shop-Elements"> 
                    <button class="btnIcon add-cart" id="btn-CartLaptop">Add to Cart</button>
                    <p id="product-Price">&euro;1,999</p>
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