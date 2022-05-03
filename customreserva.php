<?php
/* Template Name: Reserva */
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
                    <button type="button" class="btn btn-luxury-carousel">Reserva</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="<?php the_field('slider2')?>" alt="carousel_ford">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-luxury-carousel">Reserva</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="http://luxurycars.test/wp-content/uploads/2022/04/carousel1.webp" alt="carousel_ford">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-luxury-carousel">Reserva</button>
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

<?php get_footer(); ?>