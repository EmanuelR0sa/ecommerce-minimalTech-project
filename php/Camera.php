<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIMALTECH_Shop_Camera</title>
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
            <a href="keyboard.php"> <img id="subNavkeyboardIcon"  src="./img/keyboard-icon-white.png " alt="keyboard-icon"></a> 
            <a href="VR.php"><img  id="subNavVrIcon"  src="./img/vr-headset-icon-white.png" alt="vr-icon"></a>   
            </div>
        </header>
            <article class="article-Box">
                <div class="containerSlideshow">
                    <div class="mySlides">
                        <div class="numbertext">1 / 5</div>
                        <img class="slideImg" id="drone01" src="./img/DJI Mavic 3 drone01.png " alt="DJI Mavic 3 Classic">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">2 / 5</div>
                        <img class="slideImg" id="drone02" src="./img/DJI Mavic 3 drone02.png " alt="DJI Mavic 3 Classic">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">3 / 5</div>
                        <img class="slideImg" id="drone03" src="./img/DJI Mavic 3 drone03.png " alt="DJI Mavic 3 Classic">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">4 / 5</div>
                        <img class="slideImg" id="drone04" src="./img/DJI Mavic 3 drone04.png " alt="DJI Mavic 3 Classic">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">5 / 5</div>
                        <img class="slideImg" id="drone05" src="./img/DJI Mavic 3 drone05.png " alt="DJI Mavic 3 Classic">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>

                    <div class="row">
                        <div class="column">
                            <img class="demo cursor" src="./img/DJI Mavic 3 drone01.png" onclick="currentSlide(1)" alt="DJI Mavic 3 Classic">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/DJI Mavic 3 drone02.png" onclick="currentSlide(2)" alt="DJI Mavic 3 Classic">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/DJI Mavic 3 drone03.png" onclick="currentSlide(3)" alt="DJI Mavic 3 Classic">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/DJI Mavic 3 drone04.png" onclick="currentSlide(4)" alt="DJI Mavic 3 Classic">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/DJI Mavic 3 drone05.png" onclick="currentSlide(5)" alt="DJI Mavic 3 Classic">
                        </div>
                    </div>
                </div>

                <div class="productContent-Box">
                    <h2 id="productName"> Mavic 3 Classic</h2>
                    <p id="productBrand"> DJI</p>
                    <table>
                        <tr>
                            <td id="text-Product-Name ">Takeoff Weight</td>
                            <td id="text-Product-Specification">895 g</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name ">Dimensions Folded</td>
                            <td id="text-Product-Specification"> 221×96.3×90.3 mm (L×W×H)</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Dimensions Unfolded</td>
                            <td id="text-Product-Specification">347.5×283×107.7 mm (L×W×H)</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Max Takeoff Altitude</td>
                            <td id="text-Product-Specification">6000 m</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Max Flight Time</td>
                            <td id="text-Product-Specification">46 minutes</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Camera</td>
                            <td id="text-Product-Specification">20 MP</td>
                        </tr>
                    </table>
                    <div class="productContent-Box" id="shop-Elements"> 
                    <button class="btnIcon add-cart"  id="btn-CartCamera">Add to Cart</button>
                    <p id="product-Price">&euro;1,500</p>
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