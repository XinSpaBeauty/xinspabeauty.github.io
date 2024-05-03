<footer class="site-footer">
    <div class="site-footer__shape-1 float-bob-x">
        <img src="<?php echo $sitehost ?>/assets/images/shapes/site-footer-shape-1.png" alt="">
    </div>
    <div class="site-footer__shape-2 float-bob-y">
        <img src="<?php echo $sitehost ?>/assets/images/shapes/site-footer-shape-2.png" alt="">
    </div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__contact-box">
                        <div class="footer-widget__contact">
                            <a href="mailto:admin@xinspabeauty.com">admin@xinspabeauty.com</a>
                            <a href="tel:6282339998890">+ 62 ( 89 ) - 72349404</a>
                        </div>
                        <div class="footer-widget__contact-form-box">
                            <form class="footer-widget__contact-form mc-form" data-url="MC_FORM_URL"
                                  novalidate="novalidate">
                                <div class="footer-widget__contact-form-input-box">
                                    <input type="email" placeholder="Email address" name="EMAIL">
                                    <button type="submit" class="footer-widget__newsletter-btn"><img
                                            src="<?php echo $sitehost ?>/assets/images/icon/paper-plan-icon.png" alt=""></button>
                                </div>
                            </form>
                            <div class="mc-form__response"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__links">
                        <div class="footer-widget__title-box">
                            <h4 class="footer-widget__title">Links</h4>
                        </div>
                        <ul class="footer-widget__links-list list-unstyled">
                            <li><a href="https://xinspabeauty.com/">About</a></li>
                            <li><a href="https://xinspabeauty.com/">Pricing Plans</a></li>
                            <li><a href="https://xinspabeauty.com/l">Promotions</a></li>
                            <li><a href="https://xinspabeauty.com/">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__timing">
                        <div class="footer-widget__title-box">
                            <h4 class="footer-widget__title">Timing</h4>
                        </div>
                        <ul class="footer-widget__timing-list list-unstyled">
                            <li><?php echo $siteopentime ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__social-box">
                        <div class="site-footer__social">
                            <a href="<?php echo $sitetwitterurl ?>"><i class="fab fa-twitter"></i></a>
                            <a href="<?php echo $sitefacebookurl ?>"><i class="fab fa-facebook"></i></a>
                            <a href="<?php echo $sitepinteresturl ?>"><i class="fab fa-pinterest-p"></i></a>
                            <a href="<?php echo $siteinstagramurl ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                        <p>
                            <?php echo $siteaddressLine1 ?> <br>
                            <?php echo $siteaddressLine2 ?> <br>
                            <?php echo $siteaddressLine3 ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text"><?php echo $sitecopyrightinfo ?></p>
                        <ul class="list-unstyled site-footer__bottom-menu">
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="home" aria-label="logo image"><img src="<?php echo $sitelogo ?>" width="90"
                                                              alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:<?php echo $siteemailinfo ?>"><?php echo $siteemailinfo ?></a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:<?php echo $sitephoneinfo ?>"><?php echo $sitephonedisplay ?></a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="<?php echo $sitetwitterurl ?>" class="fab fa-twitter"></a>
                <a href="<?php echo $sitefacebookurl ?>" class="fab fa-facebook-square"></a>
                <a href="<?php echo $sitepinteresturl ?>" class="fab fa-pinterest-p"></a>
                <a href="<?php echo $siteinstagramurl ?>" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="<?php echo $sitehost ?>/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/jarallax/jarallax.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/odometer/odometer.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/swiper/swiper.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/wow/wow.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/isotope/isotope.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/countdown/countdown.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/vegas/vegas.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/timepicker/timePicker.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/circleType/jquery.circleType.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/circleType/jquery.lettering.min.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/sidebar-content/jquery-sidebar-content.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/twenty-twenty/twentytwenty.js"></script>
<script src="<?php echo $sitehost ?>/assets/vendors/twenty-twenty/jquery.event.move.js"></script>

<!-- cndrx -->

<div class="gtranslate_wrapper" id="gt-wrapper-17710632"></div><link href="https://fonts.googleapis.com/css?family=Raleway:900%2C100%2C600%7CRoboto:400&display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css" >
<script type="text/javascript" id="gt_widget_script_17710632-js-before">
/* <![CDATA[ */
window.gtranslateSettings = /* document.write */ window.gtranslateSettings || {};window.gtranslateSettings['17710632'] = {"default_language":"en","languages":["en","id"],"url_structure":"none","native_language_names":1,"flag_style":"2d","wrapper_selector":"#gt-wrapper-17710632","alt_flags":[],"float_switcher_open_direction":"top","switcher_horizontal_position":"right","switcher_vertical_position":"bottom"};
/* ]]> */
</script><script src="https://cdn.gtranslate.net/widgets/latest/float.js?ver=6.4.3" data-no-optimize="1" data-no-minify="1" data-gt-orig-url="/" data-gt-orig-domain="excellencystudy.com" data-gt-widget-id="17710632" defer></script><script></script><script id="rs-initialisation-scripts">
		var	tpj = jQuery;

		var	revapi1;

		if(window.RS_MODULES === undefined) window.RS_MODULES = {};
		if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
		RS_MODULES.modules["revslider11"] = {once: RS_MODULES.modules["revslider11"]!==undefined ? RS_MODULES.modules["revslider11"].once : undefined, init:function() {
			window.revapi1 = window.revapi1===undefined || window.revapi1===null || window.revapi1.length===0  ? document.getElementById("rev_slider_1_1") : window.revapi1;
			if(window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length==0) { window.revapi1initTry = window.revapi1initTry ===undefined ? 0 : window.revapi1initTry+1; if (window.revapi1initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider11"].init()}); return;}
			window.revapi1 = jQuery(window.revapi1);
			if(window.revapi1.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_1_1"); return;}
			revapi1.revolutionInit({
					revapi:"revapi1",
					DPR:"dpr",
					visibilityLevels:"1240,1024,778,480",
					gridwidth:1200,
					gridheight:800,
					lazyType:"smart",
					spinner:"spinner0",
					perspective:600,
					perspectiveType:"local",
					editorheight:"800,768,960,720",
					responsiveLevels:"1240,1024,778,480",
					progressBar:{disableProgressBar:true},
					navigation: {
						mouseScrollNavigation:false,
						wheelCallDelay:1000,
						onHoverStop:false,
						arrows: {
							enable:true,
							style:"persephone",
							hide_onmobile:true,
							hide_under:480,
							hide_onleave:true,
							left: {

							},
							right: {

							}
						}
					},
					viewPort: {
						global:true,
						globalDist:"-200px",
						enable:false,
						visible_area:"20%"
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid:true
					},
			});
			
		}} // End of RevInitScript

		if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
	</script>
<!-- cndrx -->


<!-- template js -->
<script src="<?php echo $sitehost ?>/assets/js//mellis.js"></script>
</body>

</html>