<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageName) ? $pageName." |" : "" ?> <?php echo (isset($sitename)) ? $sitename : "" ?> </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $sitehost ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $sitehost ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $sitehost ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $sitehost ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="mellis HTML 5 Template " />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/mellis-icons/style.css">
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/vendors/twenty-twenty/twentytwenty.css" />
    <!-- template styles -->
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/css/mellis.css" />
    <link rel="stylesheet" href="<?php echo $sitehost ?>/assets/css/mellis-responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <?php
        if(isset($htmlHeader)){
            for($i = 0; $i < count($htmlHeader); $i++){
                if($i > 0) echo "\t";
                echo $htmlHeader[$i]."\n";
            }
        }
    ?>
</head>

<body>



<div class="preloader">
    <div class="preloader__image"></div>
</div>
<!-- /.preloader -->




<div class="page-wrapper">
    <header class="main-header">
        <div class="main-header__top">
            <div class="main-header__top-wrapper">
                <div class="main-header__top-inner">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:<?php echo $siteemailinfo ?>"><?php echo $siteemailinfo ?></a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="text">
                                    <p><a href="tel:<?php echo $sitephoneinfo ?>"><?php echo $sitephonedisplay ?></a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__social">
                            <a href="<?php echo $sitetwitterurl ?>"><i class="fab fa-twitter"></i></a>
                            <a href="<?php echo $sitefacebookurl ?>"><i class="fab fa-facebook"></i></a>
                            <a href="<?php echo $sitepinteresturl ?>"><i class="fab fa-pinterest-p"></i></a>
                            <a href="<?php echo $siteinstagramurl ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="main-header__btn-box">
                            <a href="contact" class="thm-btn main-header__btn">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="main-menu" style="background-color: var(--mellis-black)">
            <div class="main-menu__wrapper">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="<?php echo $sitehost ?>/home"><img src="<?php echo $sitehost ?>/assets/images/resources/logo-1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="main-menu__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li>
                                <a href="<?php echo $sitehost ?>/home">Home </a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Our Services</a>
                                <ul>
                                    <li><a href="<?php echo $sitehost ?>/services">All Services</a></li>
                                    <li><a href="<?php echo $sitehost ?>/services/massage">Massages</a></li>
                                    <li><a href="<?php echo $sitehost ?>/services/nail">Nail</a></li>
                                    <li><a href="<?php echo $sitehost ?>/services/eye">Eye</a></li>
                                </ul>
                            </li>
                            <!--<li class="dropdown">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="team.html">Team Members</a></li>
                                    <li><a href="pricing-plans.html">Pricing Plans</a></li>
                                    <li><a href="promotions.html">Promotions</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="client-stories.html">Client Stories</a></li>
                                    <li><a href="client-story-details.html">Client Story Details</a></li>
                                </ul>
                            </li>-->
                            <!--<li class="dropdown">
                                <a href="#">Shop</a>
                                <ul>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                </ul>
                            </li>-->
                            <li>
                                <a href="<?php echo $sitehost ?>/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="main-menu__right">
                        <div class="main-menu__search-cart-box">
                            <div class="main-menu__search-box">
                                <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->