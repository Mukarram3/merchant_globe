<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM product_details WHERE code='" . $_GET["code"] . "'");
                $itemArray = array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]);

                if (!empty($_SESSION["cart_item"])) {
                    if (array_key_exists($_GET["code"], $_SESSION["cart_item"])) {
                        $_SESSION["cart_item"][$_GET["code"]]["quantity"] += $_POST["quantity"];
                    } else {
                        $_SESSION["cart_item"][$_GET["code"]] = $itemArray;
                    }
                } else {
                    $_SESSION["cart_item"][$_GET["code"]] = $itemArray;
                }
            }
            break;
        case "remove":

            if (!empty($_SESSION["cart_item"])) {
                unset($_SESSION["cart_item"][$_GET['code']]);
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Merchant Globe - Gaming Template</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="images/logos/icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap4.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/dEfPZgx8arsl.css">
    <link rel="stylesheet" href="css/9CvM9uLs1VvT.css">
    <link rel="stylesheet" href="fonts/fontello-embedded.css">

    <link rel="stylesheet" href="css/font-awesome-5.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/margin.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/responive.css">
    <link rel="stylesheet" href="css/slider.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>


    

</head>

<body>
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="fonts/VdeGuOOPoAei.svg" alt>
            </div>
        </div>
    </div>

<header class="header-style-four">
        <!-- <div class="header-top-area s-header-top-area d-none d-lg-block">
                <div class="container custom-container-two">
                    <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="header-top-offer">
                                <p>Exclusive Black Friday ! Offer</p>
                                <span class="coming-time" data-countdown="2021/3/15"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-social">
                                <span>Follow us on :</span>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <div id="sticky-header" class="header header-four-wrap">
            <span class="header-four-wrap-black">
                <div class="container custom-container-two">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-menu menu-style-two">
                                <nav>
                                    <div class="logo header-width">
                                        <a href="index.php"><img class="logo" src="images/logos/logo2.png"
                                                alt="Logo"></a>
                                    </div>

                                    <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                        <ul class="nav-barMenu">
                                            <li class=" <?= ($activePage == 'index') ? 'show':''; ?> "><a href="index.php">HOME</a></li>
                                            <li class=" <?= ($activePage == 'about') ? 'show':''; ?> "><a href="company.php">Company</a></li>
                                            <li class=" <?= ($activePage == 'post') ? 'show':''; ?> "><a href="solution.php">Solutions</a></li>
                                            <li class=" <?= ($activePage == 'contact') ? 'show':''; ?> "><a href="contact.php">CONTACT</a></li>
                                        </ul>
                                        <ul class="sidemenu">
                                            <li class="header-search"><a class="iconsMenu" href="#" data-toggle="modal"
                                                    data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                            <li class="header-shop-cart"><a class="iconsMenu" href="#"><i
                                                        class="fas fa-shopping-basket"></i>
                                                        <?php
                                                            if (!empty($_SESSION["cart_item"])) {
                                                                $total_quantity = 0;
                                                                $total_price = 0;
                                                                foreach ($_SESSION["cart_item"] as $item) {
                                                                    $total_quantity += $item["quantity"];
                                                                }
                                                                echo "<span>".$total_quantity."</span>";
                                                            }
                                                        ?>
                                                      
                                                    </a>
                                                <ul class="minicart">
                                                    <!-- <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#">
                                                                <img src="images/J45BnXahwT1Z.jpg" alt>
                                                            </a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4>
                                                                <a href="#">Xbox One Controller</a>
                                                            </h4>
                                                            <div class="cart-price">
                                                                <span class="new">$229.9</span>
                                                                <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="total-price">
                                                            <span class="f-left">Total:</span>
                                                            <span class="f-right">$239.9</span>
                                                        </div> -->

                                                        <a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
                                                    </li>
                                                    <li>
                                                        <div class="checkout-link">
                                                            <!-- <a href="cart.php">Shopping Cart</a> -->
                                                            <a class="red-color" href="checkout.php">Checkout</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-action">
                                        <ul>
                                            <!-- <li>
                                                    <ul>
                                                        <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                                        <li class="header-shop-cart"><a href="#"><i class="fas fa-shopping-basket"></i><span>0</span></a>
                                                            <ul class="minicart">
                                                                <li class="d-flex align-items-start">
                                                                    <div class="cart-img">
                                                                        <a href="#">
                                                                            <img src="images/J45BnXahwT1Z.jpg" alt>
                                                                        </a>
                                                                    </div>
                                                                    <div class="cart-content">
                                                                        <h4>
                                                                            <a href="#">Xbox One Controller</a>
                                                                        </h4>
                                                                        <div class="cart-price">
                                                                            <span class="new">$229.9</span>
                                                                            <span>
                                                                                <del>$229.9</del>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="del-icon">
                                                                        <a href="#">
                                                                            <i class="far fa-trash-alt"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="total-price">
                                                                        <span class="f-left">Total:</span>
                                                                        <span class="f-right">$239.9</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkout-link">
                                                                        <a href="cart.php">Shopping Cart</a>
                                                                        <a class="red-color" href="checkout.php">Checkout</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li> -->
                                            <li class="header-newsletter"><a href="#"><i
                                                        class="far fa-envelope"></i><span>Newsletter</span></a>

                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                        <!-- Modal Search -->
                        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form>
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </span>
        </div>
    </header>