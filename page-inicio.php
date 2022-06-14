<?php get_header(); ?>

<!--carousel-section -->
<section class="carousel-section">
    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carousel-img" src="<?php the_field('slider1')?>" alt="carousel_ford">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-luxury-carousel"><?php the_field('txtbtn') ?></button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="<?php the_field('slider2')?>" alt="carousel_ford">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-luxury-carousel"><?php the_field('txtbtn') ?></button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="<?php the_field('slider3')?>" alt="carousel_ford">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-luxury-carousel"><?php the_field('txtbtn') ?></button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel -->
</section>
<!--carousel-section -->

<!--brands-section-->
<section class="brands-section">
    <div class="container marketing">
        <div class="row">
            <div class="col-lg-4 text-center m-b5">
                <img class="bd-placeholder-img brand-img-size" src="<?php the_field('marca_img1')?>" alt="chevroletLogo">
                <h2><?php the_field('nombre_marca1')?></h2>
                <p><?php the_field('slogan_marca1')?></p>
                <button type="button" class="btn btn-luxury"><?php the_field('txtbtn_marca1')?></button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center m-b5">
                <img class="bd-placeholder-img brand-img-size" src="<?php the_field('marca_img2')?>" alt="lamborghiniLogo">
                <h2><?php the_field('nombre_marca2')?></h2>
                <p><?php the_field('slogan_marca2')?> las carreteras</p>
                <button type="button" class="btn btn-luxury"><?php the_field('txtbtn_marca2')?></button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center m-b5">
                <img class="bd-placeholder-img brand-img-size" src="<?php the_field('marca_img3')?>" alt="fordLogo">
                <h2><?php the_field('nombre_marca3')?></h2>
                <p><?php the_field('slogan_marca3')?></p>
                <button type="button" class="btn btn-luxury"><?php the_field('txtbtn_marca3')?></button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!--brands-section-->

<!--best-seller-section-->
<section class="best-seller-section">
    <div class="container marketing">

        <div class="row featurette mb-5">
            <div class="col-md-7">
                <h2 class="featurette-heading mb-4"><span class="tittle-decoration"><?php the_field('title1')?></span> <?php the_field('subtitle1')?></h2>
                <p class="lead"><?php the_field('description1')?></p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php the_field('destacada_img1')?>" alt="chevroletCamaroIndex">
            </div>
        </div>

        <div class="row featurette mb-5">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading mb-4"><span class="tittle-decoration"><?php the_field('title2')?></span> <?php the_field('subtitle2')?></h2>
                <p class="lead"><?php the_field('description2')?></p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php the_field('destacada_img2')?>" alt="lamborghiniAventadorIndex">
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading mb-4"><span class="tittle-decoration"><?php the_field('title3')?></span> <?php the_field('subtitle3')?></h2>
                <p class="lead"><?php the_field('description3')?></p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php the_field('destacada_img3')?>" alt="fordMustangIndex">
            </div>
        </div>

    </div><!-- /.container -->
</section>
<!--best-seller-section-->

<?php get_footer(); ?>