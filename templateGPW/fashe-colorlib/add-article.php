<?php
require_once('../Controller/Article.php');

$article = new Article();
if(isset($_POST['name']) &&
    isset($_POST['brandName']) &&
    isset($_POST['path']) &&
    isset($_POST['price']) &&
    isset($_POST['description']) &&
    isset($_POST['size'])) {
    $article->addNewArticleInDataBase($_POST['name'], $_POST['brandName'],
        $_POST['price'], $_POST['size'],$_POST['path'], $_POST['description']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Article</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body class="animsition">
<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <span class="topbar-child1">
					Free shipping for standard order over $100
				</span>

            <div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>

                <div class="topbar-language rs1-select2">
                    <label>
                        <select class="selection-1" name="time">
                            <option>USD</option>
                            <option>EUR</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="index.html" class="logo">
                <img src="images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="index.html">Home</a>
                            <ul class="sub_menu">
                                <li><a href="index.html">Homepage V1</a></li>
                                <li><a href="home-02.html">Homepage V2</a></li>
                                <li><a href="home-03.html">Homepage V3</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="product.php">Shop</a>
                        </li>

                        <li class="sale-noti">
                            <a href="product.php">Sale</a>
                        </li>

                        <li>
                            <a href="cart.php">Features</a>
                        </li>

                        <li>
                            <a href="blog.html">Blog</a>
                        </li>

                        <li>
                            <a href="about.html">About</a>
                        </li>

                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Add Article -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 p-b-30"></div>
        <div class="col-md-6 p-b-30">
            <form method="post" action="" class="leave-comment">
                <h4 class="m-text26 p-b-36 p-t-15">
                    Add an Article
                </h4>

                <div class="bo4 of-hidden size15 m-b-20">
                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" placeholder="Article's Name" name="name" required>
                </div>

                <div class="bo4 of-hidden size15 m-b-20">
                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" placeholder="Brand's Name" name="brandName" required>
                </div>

                <div class="bo4 of-hidden size15 m-b-20">
                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" placeholder="Path Access" name="path" required>
                </div>

                <div class="bo4 of-hidden size15 m-b-20">
                    <input class="sizefull s-text7 p-l-22 p-r-22" type="number" placeholder="Price" name="price" required>
                </div>

                <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="description" placeholder="Message"></textarea>

                <div class="bo4 of-hidden size15 m-b-20">
                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" placeholder="Size" name="size" required>
                </div>

                <div class="w-size25">
                    <!-- Button -->
                    <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                        Upload Your Article
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                GET IN TOUCH
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                </p>

                <div class="flex-m p-t-30">
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                </div>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Categories
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Men
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Women
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Dresses
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Sunglasses
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Links
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Search
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        About Us
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Contact Us
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Help
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Track Order
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Shipping
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        FAQs
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Newsletter
            </h4>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Subscribe
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
        </a>

        <a href="#">
            <img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
        </a>

        <a href="#">
            <img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
            <img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
        </a>

        <a href="#">
            <img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
            Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </div>
    </div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>


<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });

    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect2')
    });
</script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
</body>
</html>