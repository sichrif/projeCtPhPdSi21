<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Setting</title>
    <link href="plugin/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="plugin/bootstrap/datepicker.css" rel="stylesheet">
    <link href="plugin/font-awesome/font-awesome.css" rel="stylesheet">
    <link href="plugin/form-field/jquery.formstyler.css" rel="stylesheet">
    <link href="plugin/revolution-plugin/extralayers.css" rel="stylesheet">
    <link href="plugin/revolution-plugin/settings.css" rel="stylesheet">
    <link href="plugin/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugin/owl-carousel/owl.theme.default.css" rel="stylesheet">
    <link href="plugin/slick-slider/slick-theme.css" rel="stylesheet">
    <link href="plugin/magnific/magnific-popup.css" rel="stylesheet">
    <link href="plugin/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="plugin/animation/animate.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
<?php
 include 'Classes/dbConnect.class.php' ; 

 $DB = new DataBase;
 $base = $DB->connectDB();          
 $rep=$base->prepare('SELECT * FROM customer WHERE cid =:param_cid');
 $rep->bindParam(':param_cid', $_GET['cid']); 
 $rep->execute();  
 $data = $rep->fetch();
?>
    <!-- Page pre loader -->
    <div id="pre-loader">
        <div class="loader-holder">
            <div class="frame">
                <img src="images/Preloader.gif" alt="Laboom" />
            </div>
        </div>
    </div>
    <div class="wrapper">
        <!-- Start Header -->
        <header>
            <div class="header-part header-reduce sticky">
                <div class="header-top">
                    <div class="container">
                        <div class="header-top-inner">
                            <div class="header-top-left">
                            </div>
                            <div class="header-top-right">
                                <div class="social-top">
                                </div>
                                <div class="language-menu">
                                    <a href="#" class="current-lang">Setting Menu <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Account Setting</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Log out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-bottom">
                    <div class="container">
                        <div class="header-info">
                            <div class="header-info-inner">
                                <div class="book-table header-collect book-md">
                                    <a href="CustomerHome.php" class="header-collect"><img src="images/img_avatar.png" class="imgCustom">UserName</a>
                                </div>
                                <div class="shop-cart header-collect">
                                    <a href="shop_cart.html"><img src="images/icon-basket.png" alt="">2 items - $ 20.89</a>
                                    <div class="cart-wrap">
                                        <div class="cart-blog">
                                            <div class="cart-item">
                                                <div class="cart-item-left">
                                                    <img src="images/img59.png" alt="">
                                                </div>
                                                <div class="cart-item-right">
                                                    <h6>Caramel Chesse Cake</h6>
                                                    <span>$ 14.00</span>
                                                </div>
                                                <span class="delete-icon"></span>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-item-left">
                                                    <img src="images/img60.png" alt="">
                                                </div>
                                                <div class="cart-item-right">
                                                    <h6>Caramel Chesse Cake</h6>
                                                    <span>$ 14.00</span>
                                                </div>
                                                <span class="delete-icon"></span>
                                            </div>
                                            <div class="subtotal">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6>Subtotal :</h6>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <span>$ 140.00</span>
                                                </div>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="shop_cart.html" class="btn-black view">VIEW ALL</a>
                                                <a href="#" class="btn-main checkout">CHECK OUT</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search-part">
                                    <a href="#"></a>
                                    <div class="search-box">
                                        <input type="text" name="txt" placeholder="Search">
                                        <input type="submit" name="submit" value=" ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="menu-icon">
                            <a href="#" class="hambarger">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </a>
                        </div>


                        <div class="menu-main">
                            <ul>
                                <li class="mega-menu">
                                    <a href="CustomerHome.php">Home</a>
                                </li>

                                <li class="mega-menu">
                                    <a href="orders.html">Orders</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo">
                            <a href="CustomerHome.php"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="logo">
                        <a href="CustomerHome.php"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
    </div>
    </header>
    <!-- End Header -->
    <!-- Start Main -->
    <main>
        <div class="main-part">
            <!-- Start Breadcrumb Part -->
            <section class="breadcrumb-part" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5" style="background-image: url('images/breadbg1.jpg');">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <h2>Account Setting</h2>
                        <a href="CustomerHome.php">Home</a>
                        <span>Setting</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->
            <section class="home-icon shop-cart bg-skeen">
                <div class="icon-default icon-skeen">
                    <img src="images/scroll-arrow.png" alt="">
                </div>
                <div class="container">

                    <div class="shop-cart-list wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">




                        <div class="row">
                            <div class="col-md-7 col-sm-7 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="shop-checkout-left">
                                    <h4>Account Setting</h4>
                                    <form class="form-checkout" name="form" method="POST" action="updateCl.php">
                                        <div class="row">
                                        
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <input type="text" name="name" placeholder="Name" value="<?php echo $data['name']?>">
                                                <span class="text-danger"><?php if (isset($username_error)) echo $usernameError; ?></span> 
                                            </div>
                                            

                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <input type="email" name="email" placeholder="Email" value="<?php echo $data['email']?>">
                                                <span class="text-danger"><?php if (isset($emailError)) echo $emailError; ?></span> 

                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <input type="text" name="text" placeholder="Phone" value="<?php echo $data['phone']?>">
                                                <span class="text-danger"><?php if (isset($username_error)) echo $usernameError; ?></span> 

                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <textarea placeholder="Address" value="<?php echo $data['adresse']?>"></textarea>
                                            </div>



                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <center>

                                                    <input type="password" name="cu_password" placeholder="Current Password">
                                                    <span class="text-danger"><?php if (isset($cu_password)) echo $cu_password; ?></span> 

                                                </center>
                                            </div>


                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <input type="password" name="new_password" placeholder="New Password">
                                                <span class="text-danger"><?php if (isset($passwordError)) echo $passwordError; ?></span> 

                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <input type="password" name="con_password" placeholder="Confirm Password">
                                                <span class="text-danger"><?php if (isset($passwordConfErr)) echo $passwordConfErr; ?></span> 
                                            </div>


                                            <div class="cart-btn">
                                                <label>
                                                    <button type="submit"class="btn-main checkout" name="updaty" value="confirm">CONFIRM</button>
                                                
                                                <a href="shop_cart.html" class="btn-main checkout">CANCEL</a>
                                            </label>
                                            </div>



                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

                                <br><br><br><br><br><br>
                                <img src="images/setting.svg" alt="">




                            </div>
                        </div>





                    </div>

                </div>
            </section>
        </div>
    </main>
    <!-- End Main -->
    <!-- Start Footer -->
    <footer>
        <div class="footer-part wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="icon-default icon-dark">
                <img src="images/footer-logo.png" alt="">
            </div>
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-info">
                        <h3>Foody Restaurant</h3>
                        <p>Route Menzel Abderrahmen – Zarzouna 7021 Bizerte، 7021</p>
                        <p><a href="#">23 349 082</a></p>
                        <p><a href="#">support@foody.com</a></p>
                    </div>
                </div>
                <div class="copy-right">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 copyright-before">
                            <span>Copyright © 2019 xxx Theme. All rights reserved.</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 copyright-after">
                            <div class="social-round">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-find">
                <a href="#">
                    <img src="images/location.png" alt="">
                    <span>Find us on Map</span>
                </a>
            </div>
            <div class="location-footer-map">
                <div class="icon-find-location">
                    <a href="#">
                        <img src="images/location.png" alt="">
                        <span>Find us on Map</span>
                    </a>
                </div>
                <div class="footer-map-outer">
                    <div id="footer-map"></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    </div>
    <!-- Back To Top Arrow -->
    <a href="#" class="top-arrow"></a>
    <script src="js/jquery.min.js"></script>
    <script src="plugin/bootstrap/bootstrap.min.js"></script>
    <script src="plugin/bootstrap/bootstrap-datepicker.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf6My1Jfdi1Fmj-DUmX_CcNOZ6FLkQ4Os"></script>
    <script src="plugin/form-field/jquery.formstyler.min.js"></script>
    <script src="plugin/revolution-plugin/jquery.themepunch.plugins.min.js"></script>
    <script src="plugin/revolution-plugin/jquery.themepunch.revolution.min.js"></script>
    <script src="plugin/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugin/slick-slider/slick.min.js"></script>
    <script src="plugin/isotop/isotop.js"></script>
    <script src="plugin/isotop/packery-mode.pkgd.min.js"></script>
    <script src="plugin/magnific/jquery.magnific-popup.min.js"></script>
    <script src="plugin/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="plugin/animation/wow.min.js"></script>
    <script src="plugin/parallax/jquery.stellar.js"></script>
    <script src="js/app.js"></script>
    <script src="js/script.js"></script>
</body>


</html>