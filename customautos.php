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
                <img class="carousel-img" src="<?php the_field('slider1') ?>" alt="carousel_ford">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-luxury-carousel"><?php the_field('txtbtn') ?></button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="<?php the_field('slider1') ?>" alt="carousel_ford">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-luxury-carousel"><?php the_field('txtbtn') ?></button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="<?php the_field('slider1') ?>" alt="carousel_ford">
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

<section class="container marketing">
    <!--Colores-->
    <h2 class="title-section"><?php the_field('titulo1') ?></h2>
    <p class="lead">Precio: <span class="precio">$<?php the_field('precio') ?></span></p>

    <p class="lead text-center">Colores disponibles</p>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carousel-img" src="<?php the_field('color_slader1') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="<?php the_field('color_slader2') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="<?php the_field('color_slader3') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</section>
<!--caracteristicas-->
<section class="container marketing">
    <h2 class="title-section"><?php the_field('titulo2') ?></h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <img class="img-caracteristica" src="<?php the_field('caracteristica_img1') ?>" alt="caract01">
                <h3 class="text-caracteristica"><?php the_field('caracteristica1') ?></h3>
                <p class="text-caracteristica"><?php the_field('caracteristica_txt1') ?></p>
            </div>
            <div class="col">
                <img class="img-caracteristica" src="<?php the_field('caracteristica_img2') ?>" alt="caract01">
                <h3 class="text-caracteristica"><?php the_field('caracteristica2') ?></h3>
                <p class="text-caracteristica"><?php the_field('caracteristica_txt2') ?></p>
            </div>
            <div class="col">
                <img class="img-caracteristica" src="<?php the_field('caracteristica_img3') ?>" alt="caract01">
                <h3 class="text-caracteristica"><?php the_field('caracteristica3') ?></h3>
                <p class="text-caracteristica"><?php the_field('caracteristica_txt3') ?></p>
            </div>
        </div>
    </div>
</section>

<!--coloros-->
<section class="container marketing">
    <h2 class="title-section"><?php the_field('titulo3') ?></h2>
    <img class="carousel-img" src="<?php the_field('modelo_img') ?>" alt="coloro">

    <div class="container px-4 py-3" id="icon-grid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-3">
            <div class="col d-flex align-items-start">
                <div>
                    <h4 class="fw-bold mb-0"><?php the_field('ft_titulo1')?></h4>
                    <p><?php the_field('fr_detalle1')?></p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h4 class="fw-bold mb-0"><?php the_field('ft_titulo2')?></h4>
                    <p><?php the_field('fr_detalle2')?></p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h4 class="fw-bold mb-0"><?php the_field('ft_titulo3')?></h4>
                    <p><?php the_field('fr_detalle3')?></p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h4 class="fw-bold mb-0"><?php the_field('ft_titulo4')?></h4>
                    <p><?php the_field('fr_detalle4')?></p>
                </div>
            </div>
        </div>
    </div>

</section>

<!--Galeria-->
<section class="container marketing">
    <h2 class="title-section"><?php the_field('titulo4') ?></h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <img class="img-caracteristica" src="<?php the_field('galeria_img1') ?>" alt="foto01">
            </div>
            <div class="col">
                <img class="img-caracteristica" src="<?php the_field('galeria_img2') ?>" alt="foto01">
            </div>
            <div class="col">
                <img class="img-caracteristica" src="<?php the_field('galeria_img3') ?>" alt="foto01">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>