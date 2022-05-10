<?php
/* Template Name: Reserva */
?>
<?php get_header(); ?>
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
                <img class="carousel-img" src="http://luxurycars.test/wp-content/uploads/2022/04/carousel1.webp" alt="carousel_ford">
                
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="http://luxurycars.test/wp-content/uploads/2022/04/carousel1.webp" alt="carousel_ford">
                
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="http://luxurycars.test/wp-content/uploads/2022/04/carousel1.webp" alt="carousel_ford">
                
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
<div class="container-fluid row justify-content-center C_reserva">
    <div class="cont_model col-8 ">
        <h1 class="my-5"><?php the_field('titulo1')?></h1>
        <img class= "img-fluid"src="<?php the_field('img_C1')?>" alt="Model">
        <h1 class="mt-5"><?php the_field('titulo2')?></h1>
        <div class="row justify-content-center">
            <div class="col-1 colores color_1 " ></div>
            <div class="col-1 colores color_2 "></div>
            <div class="col-1 colores color_3 "></div>
            <div class="col-1 colores color_4 "></div>
            <div class="col-1 colores color_5 "></div>
        </div>
    </div>
    <!-- Calculadora -->
    <div class="cont_calculator col-8 ">
        <h1 class="my-5"><?php the_field('titulo3')?></h1>
        <div class="row justify-content-between">
            <div class="col-3 m">
                <img class= "img-fluid"src="<?php the_field('img_spec1')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('titulo_spec1')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec1')?></h5>
                <div class="row justify-content-center">
                    <button type="button" class="btn  btn-primary btn-luxury">Agregar</button>
                </div>
            </div>
            <div class="col-3 mx-5">
                <img class= "img-fluid"src="<?php the_field('img_spec2')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('titulo_spec2')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec2')?></h5>
                <div class="row justify-content-center">
                    <button type="button" class="btn  btn-primary btn-luxury">Agregar</button>
                </div>
            </div>
            <div class="col-3 ">
                <img class= "img-fluid"src="<?php the_field('img_spec3')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('titulo_spec3')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec3')?></h5>
                <div class="row justify-content-center">
                    <button type="button" class="btn  btn-primary btn-luxury">Agregar</button>
                </div>
            </div>
            
        </div>
        <div class="row mt-5 justify-content-between">
            <div class="col-3 m">
                <img class= "img-fluid"src="<?php the_field('img_spec4')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('titulo_spec4')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec4')?></h5>
                <div class="row justify-content-center">
                    <button type="button" class="btn  btn-primary btn-luxury">Agregar</button>
                </div>
            </div>
            <div class="col-3 mx-5">
                <img class= "img-fluid"src="<?php the_field('img_spec5')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('titulo_spec5')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec5')?></h5>
                <div class="row justify-content-center">
                    <button type="button" class="btn  btn-primary btn-luxury">Agregar</button>
                </div>
            </div>
            <div class="col-3 ">
                <img class= "img-fluid"src="<?php the_field('img_spec6')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('titulo_spec6')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec6')?></h5>
                <div class="row justify-content-center">
                    <button type="button" class="btn  btn-primary btn-luxury">Agregar</button>
                </div>
            </div>
            
        </div>
        
        
        <h1 class="mt-5 mb-3">Total</h1>
        <div class="calc_container  p-5 ">
            <h4>Precio del vehículo</h4>
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h5>Lorem ipsum dolor sit</h5>
                </div>
                <div class="col-auto">
                    <h5>0,000,000</h5>
                </div>
            </div>
            <h4 class="mt-3">Accesorios</h4>
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h5>Lorem ipsum dolor sit</h5>
                </div>
                <div class="col-auto">
                    <h5>0,000</h5>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h5>Lorem ipsum dolor sit</h5>
                </div>
                <div class="col-auto">
                    <h5>0,000</h5>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h5>Lorem ipsum dolor sit</h5>
                </div>
                <div class="col-auto">
                    <h5>0,000</h5>
                </div>
            </div>

            <div class="my-4 pb-5  row justify-content-between">
                <div class="col-auto">
                    <h4>Monto Total</h4>
                </div>
                <div class="col-auto">
                    <h4>0,000,000</h4>
                </div>
            </div>
        </div><!-- fin calc_container-->
        
    </div>

</div>

<?php get_footer(); ?>