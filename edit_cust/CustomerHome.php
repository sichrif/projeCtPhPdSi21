<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from laboom.sk-web-solutions.com/blog_2col.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Dec 2019 20:36:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog 2 Columns - Laboom</title>
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
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Page pre loader -->
    <div id="pre-loader">
        <div class="loader-holder">
            <div class="frame">
                <img src="images/Preloader.gif" alt="Foody" />
            </div>
        </div>
    </div>
    <div class="wrapper">
        <!-- Start Header -->
        <header>
                <?php
                ;
                include 'classes/client.class.php' ; 
     $DB = new BaseDonne;
     $base = $DB->connect();          
     $rep=$base->prepare('SELECT * FROM customer WHERE cid =:param_cid');
     $rep->bindParam(':param_cid', $_GET['cid']); 
     $aa=$_GET['cid'];
     $rep->execute();  
     $data = $rep->fetch();
    ?>
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
                                        <li><a href="setting.php?cid=<?php $_GET['cid'] ?>"> <i class="fa fa-angle-right" aria-hidden="true"></i>Account Setting</a></li>                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Log out</a></li>
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
                                <a href="CustomerHome.html" class="header-collect"><img src="images/img_avatar.png" class="imgCustom">UserName</a>
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
                        <a href="CustomerHome.html">Home</a>
                    </li>

                    <li class="mega-menu">
                            <a href="orders.html">Orders</a>
                    </li>
                    
                    <li class="mega-menu">
                        <a href="#about_us">About Us</a>

                    </li>

                    <li class="mega-menu">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <a href="customerHome.html"><img src="images/logo.png" alt=""></a>
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
                        <h2>SHOP</h2>
                        <a href="#">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Part -->
            <section class="home-icon blog-main-section shop-page">
                <div class="icon-default">
                    <img src="images/scroll-arrow.png" alt="">
                </div>
                <div class="container">
                    <div class="portfolioFilter">
                        <div class="portfolioFilter-inner bg-skeen">
                            <a href="javascript:;" data-filter=".breakfast" class="current">BREAKFAST</a>
                            <a href="javascript:;" data-filter=".dessert">DESSERT</a>
                            <a href="javascript:;" data-filter=".dinner">DINNER</a>
                            <a href="javascript:;" data-filter=".freshfood">FRESHFOOD</a>
                            <a href="javascript:;" data-filter=".lunch">LUNCH</a>
                        </div>
                    </div>
                    <div class="portfolioContainer row" data-defaultfilter=".breakfast">
                        <div class="col-md-3 col-sm-4 col-xs-12 breakfast dessert dinner wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="shop-main-list">
                                <div class="shop-product">
                                    <img src="images/img56.png" alt="">
                                    <div class="cart-overlay-wrap">
                                        <div class="cart-overlay">
                                            <a href="shop_single.html" class="shop-cart-btn">ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                                <a href="shop_single.html"><h5>Paper Pouch</h5></a>
                                <h5><strong>$ 15.00</strong></h5>
                            </div>
                        </div>
                        
                    </div>
                    <div class="gallery-pagination">
                        <div class="gallery-pagination-inner">
                            <ul>
                                <li><a href="#" class="pagination-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span>PREV page</span></a></li>
                                <li class="active"><a href="#"><span>1</span></a></li>
                                <li><a href="#"><span>2</span></a></li>
                                <li><a href="#"><span>3</span></a></li>
                                <li><a href="#" class="pagination-next"><span>next page</span> <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- End Main -->
    <!-- Start About Us -->
    <section class="client banner-bg invert invert-black home-icon wow fadeInDown" data-background="images/banner3.jpg" data-wow-duration="1000ms" data-wow-delay="300ms" id="about_us">
        <div class="icon-default icon-black">
            <img src="images/icon21.png" alt="">
        </div>
        <div class="container">
            <div class="build-title">
                <h2>About Us</h2>
                <h6>1500+ Satisfied Clients</h6>
            </div>
            <div class="client-say">
                <div class="owl-carousel owl-theme" data-items="1" data-laptop="1" data-tablet="1" data-mobile="1" data-nav="false" data-dots="true" data-autoplay="true" data-speed="1800" data-autotime="5000">
                    <div class="item">
                        <p><img src="images/client1.png" alt=""></p>
                        <h5>Alice Williams</h5>
                        <p>Kitchen Manager</p>
                        <p>Success isn’t really that difficult. There is a significant portion of the
                            <br> population here in North America, that actually want and need
                            <br>success really no magic to be hard.</p>
                    </div>
                    <div class="item">
                        <p><img src="images/client1.png" alt=""></p>
                        <h5>Alice Williams</h5>
                        <p>Kitchen Manager</p>
                        <p>Success isn’t really that difficult. There is a significant portion of the
                            <br> population here in North America, that actually want and need
                            <br>success really no magic to be hard.</p>
                    </div>
                    <div class="item">
                        <p><img src="images/client1.png" alt=""></p>
                        <h5>Alice Williams</h5>
                        <p>Kitchen Manager</p>
                        <p>Success isn’t really that difficult. There is a significant portion of the
                            <br> population here in North America, that actually want and need
                            <br>success really no magic to be hard.</p>
                    </div>
                    <div class="item">
                        <p><img src="images/client1.png" alt=""></p>
                        <h5>Alice Williams</h5>
                        <p>Kitchen Manager</p>
                        <p>Success isn’t really that difficult. There is a significant portion of the
                            <br> population here in North America, that actually want and need
                            <br>success really no magic to be hard.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->
    
     <!-- Start Main -->
     <main>
            <div class="main-part">
                
                <!-- Start Contact Part -->
                <section class="default-section contact-part home-icon" id="contact">
                    <div class="icon-default">
                        <img src="images/scroll-arrow.png" alt="">
                    </div>
                    <div class="container">
                        <div class="title text-center">
                            <h2 class="text-coffee">Contact Us</h2>
                            <h6 class="heade-xs">We are a second-generation family business established in 1972</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <h5 class="text-coffee">Leave us a Message</h5>
                                <p>Aenean massa diam, viverra vitae luctus sed, gravida eget est. Etiam nec ipsum porttitor, consequat libero eu, dignissim eros. Nulla auctor lacinia enim id mollis.</p>
                                <form class="form" method="post" name="contact-form">
                                    <div class="alert-container"></div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>First Name *</label>
                                            <input name="first_name" type="text" required>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12"> 
                                            <label>Last Name *</label>
                                            <input name="last_name" type="text" required>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Email *</label>
                                            <input name="email" type="email" required>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Subject *</label>
                                            <input name="subject" type="text" required>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Your Message *</label>
                                            <textarea name="message" required></textarea>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input name="submit" value="SEND MESSAGE" class="btn-black pull-right send_message" type="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <address>
                                    <span class="text-primary co-title">Our Address</span>
                                    <p>Route Menzel Abderrahmen – Zarzouna 7021 Bizerte، 7021</p>
                                    <p><a href="tel:1234567890">23 349 082</a>
                                        <br> <a href="mailto:support@despina.com">support@foody.com</a></p>
                                </address>
                                <h5 class="text-coffee">Opening Hours</h5>
                                <ul class="time-list">
                                    <li><span class="week-name">Monday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Tuesday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Wednesday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Thursday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Friday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Saturday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Sunday</span> <span>Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Contact Part -->
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
        <!-- Start Book Table -->
        <!-- End Book Table -->
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


<!-- Mirrored from laboom.sk-web-solutions.com/blog_2col.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Dec 2019 20:36:33 GMT -->
</html>