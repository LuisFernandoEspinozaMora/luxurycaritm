<?php
/* Template Name: Autos */
?>

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
                    <button type="button" class="btn btn-luxury-carousel"><?php the_field('txtbtn')?></button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="<?php the_field('slider1')?>" alt="carousel_ford">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-luxury-carousel"><?php the_field('txtbtn')?></button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="<?php the_field('slider1')?>" alt="carousel_ford">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-luxury-carousel"><?php the_field('txtbtn')?></button>
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

<section class="container marketing">
        <!--Colores-->
        <h2 class="title-section"><?php the_field('titulo1')?></h2>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel-vehiculos" src="<?php the_field('model_slader01')?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="carousel-vehiculos" src="<?php the_field('model_slader02')?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="carousel-vehiculos" src="<?php the_field('model_slader03')?>" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

    </section>
    <!--caracteristicas-->
    <section class="container marketing">
        <h2 class="title-section"><?php the_field('titulo2')?></h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="img-caracteristica" src="<?php the_field('characteristic_img01')?>" alt="caract01">
                    <h3 class="text-caracteristica"><?php the_field('characteristic_title01')?></h3>
                    <p class="text-caracteristica"><?php the_field('characteristic_txt01')?></p>
                </div>
                <div class="col">
                    <img class="img-caracteristica" src="<?php the_field('characteristic_img02')?>" alt="caract01">
                    <h3 class="text-caracteristica">Caracteristica</h3>
                    <p class="text-caracteristica">Lorem ipsum Lorem ipsum</p>
                </div>
                <div class="col">
                    <img class="img-caracteristica" src="<?php the_field('characteristic_img03')?>" alt="caract01">
                    <h3 class="text-caracteristica">Caracteristica</h3>
                    <p class="text-caracteristica">Lorem ipsum Lorem ipsum</p>
                </div>
            </div>
        </div>
    </section>

    <!--Modelos-->
    <section class="container marketing">
        <h2 class="title-section"><?php the_field('titulo3')?></h2>
        <img class="img-modelos" src="http://luxurycaritm.test/wp-content/uploads/2022/04/carousel-2.webp" alt="modelo">
    </section>

    <!--Servicios-->
    <section class="best-seller-section">
        <div class="container servicios">
            <div class="row">
                <div class="col-6 col-sm-3">
                    <i class="fa-solid fa-wrench"></i>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt at</p>
                </div>
                <div class="col-6 col-sm-3">
                    <i class="fa-solid fa-truck-monster"></i>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt at</p>
                </div>

                <!-- Force next columns to break to new line -->
                <div class="w-100"></div>

                <div class="col-6 col-sm-3">
                    <i class="fa-solid fa-weight-hanging"></i>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt at</p>
                </div>
                <div class="col-6 col-sm-3">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt at</p>
                    <i class="fa-solid fa-taxi"></i>
                </div>
            </div>
        </div>
    </section>

    <!--Galeria-->
    <section class="container marketing">
        <h2 class="title-section"><?php the_field('titulo4')?></h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="img-galeria" src="http://luxurycaritm.test/wp-content/uploads/2022/04/galeria-2-scaled.webp" alt="foto01">
                </div>
                <div class="col">
                    <img class="img-galeria" src="http://luxurycaritm.test/wp-content/uploads/2022/04/carousel-3.webp" alt="foto01">
                </div>
                <div class="col">
                    <img class="img-galeria" src="http://luxurycaritm.test/wp-content/uploads/2022/04/galeria-3-scaled.webp" alt="foto01">
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>