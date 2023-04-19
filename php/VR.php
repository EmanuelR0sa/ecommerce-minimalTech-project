<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIMALTECH_Shop_VR</title>
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
                <a href="Laptop.php"> <img id="subNavLaptopIcon" src="./img/laptop-icon-white.png " alt="laptop-icon"></a>
                <a href="Camera.php"> <img id="subNavCameraIcon" src="./img/camera-drone-icon-white.png " alt="camera-icon"></a>
                <a href="keyboard.php"> <img id="subNavkeyboardIcon" src="./img/keyboard-icon-white.png " alt="keyboard-icon"></a>
            </div>
            <article class="article-Box">
                <div class="containerSlideshow">
                    <div class="mySlides">
                        <div class="numbertext">1 / 4</div>
                        <img class="slideImg" id="VR" src="./img/VRMeta Quest 201.png " alt="Meta Quest 2 VR Headset ">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">2 / 4</div>
                        <img class="slideImg" id="VR02" src="./img/VRMeta Quest 202.png " alt="Meta Quest 2 VR Headset">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">3 / 4</div>
                        <img class="slideImg" id="VR03" src="./img/VRMeta Quest 203.png " alt="Meta Quest 2 VR Headset">
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">4 / 4</div>
                        <img class="slideImg" id="VR04" src="./img/VRMeta Quest 204.png " alt="Meta Quest 2 VR Headset">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>

                    <div class="row">
                        <div class="column">
                            <img class="demo cursor" src="./img/VRMeta Quest 201.png" onclick="currentSlide(1)" alt="Meta Quest 2 VR Headset">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/VRMeta Quest 202.png" onclick="currentSlide(2)" alt="Meta Quest 2 VR Headset">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/VRMeta Quest 203.png" onclick="currentSlide(3)" alt="Meta Quest 2 VR Headset">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./img/VRMeta Quest 204.png" onclick="currentSlide(4)" alt="Meta Quest 2 VR Headset">
                        </div>

                    </div>
                </div>

                <div class="productContent-Box">
                    <h2 id="productName"> Meta Quest 2 Headset - 128 GB</h2>
                    <p id="productBrand"> Meta </p>
                    <table>
                        <tr>
                            <td id="text-Product-Name ">Batteries</td>
                            <td id="text-Product-Specification">4 AA batteries</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Product Dimensions </td>
                            <td id="text-Product-Specification">26 x 18.7 x 12.6 cm</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Colour</td>
                            <td id="text-Product-Specification">White</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Storage capacity</td>
                            <td id="text-Product-Specification">128 GB </td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name "> Special feature</td>
                            <td id="text-Product-Specification">Ergonomic, Backlit</td>
                        </tr>
                        <tr>
                            <td id="text-Product-Name ">Connectivity</td>
                            <td id="text-Product-Specification">Wireless headset</td>
                        </tr>
                    </table>
                    <div class="productContent-Box" id="shop-Elements">
                        <button class="btnIcon add-cart" id="btnCartVr">Add to Cart</button>
                        <p id="product-Price">&euro;455</p>
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