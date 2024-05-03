<!--Services One Single Start-->
<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
    <div class="services-one__single">
        <div class="services-one__single-inner">
            <div class="services-one__shape-1">
                <img src="<?php echo $sitehost ?>/assets/images/shapes/services-one-shape-1.png" alt="">
            </div>
            <div class="services-one__shape-2">
                <img src="<?php echo $sitehost ?>/assets/images/shapes/services-one-shape-2.png" alt="">
            </div>
            <div class="services-one__img-box">
                <div class="services-one__img">
                    <img src="<?php echo $sitehost ?>/<?php echo $value['image'] ?>" alt="">
                </div>
                <div class="services-one__icon">
                    <?php if(!$value["is-icon-image"]){ ?>
                    <span class="<?php echo $value['icon'] ?>"></span>
                    <?php }else{ ?>
                    <img src="<?php echo $sitehost ?>/<?php echo $value['icon'] ?>" width="47px" height="47px" alt="">
                    <?php } ?>
                </div>
            </div>
            <h3 class="services-one__title"><a href="<?php echo $value['url'] ?>"><?php echo $value['title'] ?></a></h3>
            <p class="services-one__text">
                <?php echo $value['description'] ?>
            </p>
            <div class="services-one__btn-box">
                <a href="<?php echo $value['url'] ?>" class="services-one__btn">Book now<i
                        class="icon-right-arrow"></i></a>
            </div>
        </div>
    </div>
</div>
<!--Services One Single End-->