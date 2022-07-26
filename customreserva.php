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
                <img class="carousel-img" src="<?php the_field('slider1')?>" alt="carousel_ford">
                
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="<?php the_field('slider2')?>" alt="carousel_ford">
                
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="<?php the_field('slider3')?>" alt="carousel_ford">
                
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
<div class="row justify-content-center C_reserva">
    <div class="cont_model col-sm-8 ">
        <h1 class="my-5 text-center text-md-start text-lg-start"><?php the_field('titulo1')?></h1>
        <p id="routes_img_cars" class="visually-hidden" data-onenglish="<?php the_field('onenglish')?>" data-blue="<?php the_field('route_blue')?>" data-white="<?php the_field('route_white')?>"
         data-red="<?php the_field('route_red')?>" data-darkblue="<?php the_field('route_darkBlue')?>" data-yellow="<?php the_field('route_yellow')?>"></p>
         
        <img id="img_top" class= "img-fluid"src="<?php the_field('route_blue')?>" alt="Model">

        <h1 class="mt-5"><?php the_field('titulo2')?></h1>
        <div class="row justify-content-center">
            <div class="col-sm-1 my-1 colores color_1" onclick="changeImage(0)"></div>
            <div class="col-sm-1 my-1 colores color_2" onclick="changeImage(1)"></div>
            <div class="col-sm-1 my-1 colores color_3" onclick="changeImage(2)"></div>
            <div class="col-sm-1 my-1 colores color_4" onclick="changeImage(3)"></div>
            <div class="col-sm-1 my-1 colores color_5" onclick="changeImage(4)"></div>
        </div>
    </div>
    <!-- Calculadora -->
    <div class="cont_calculator  col-sm-8 ">
        <h1 class="my-5"><?php the_field('titulo3')?></h1>
        <div class="row mx-2 mx-lg-2 justify-content-around">
            <div class="col-sm-3 ">
                <img class= "img-fluid"src="<?php the_field('img_spec1')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('title_c1')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec1')?></h5>
                <div class="row justify-content-center">
                    <button id="price_1" type="button" data-itemtitle="<?php the_field('title_c1')?>" data-price="<?php the_field('price_c1')?>" onclick="addFeature('price_1')" class="btn  btn-primary btn-luxury"><?php if (!get_field('onenglish')): ?>Agregar<?php else: ?>Add<?php endif ?></button>
                </div>
            </div>
            <div class="col-sm-3 mx-sm-5">
                <img class= "img-fluid"src="<?php the_field('img_spec2')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('title_c2')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec2')?></h5>
                <div class="row justify-content-center">
                    <button id="price_2" type="button" data-itemtitle="<?php the_field('title_c2')?>" data-price="<?php the_field('price_c2')?>" onclick="addFeature('price_2')" class="btn  btn-primary btn-luxury"><?php if (!get_field('onenglish')): ?>Agregar<?php else: ?>Add<?php endif ?></button>
                </div>
            </div>
            <div class="col-sm-3 ">
                <img class= "img-fluid"src="<?php the_field('img_spec3')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('title_c3')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec3')?></h5>
                <div class="row justify-content-center">
                    <button id="price_3" type="button" data-itemtitle="<?php the_field('title_c3')?>" data-price="<?php the_field('price_c3')?>" onclick="addFeature('price_3')" class="btn  btn-primary btn-luxury"><?php if (!get_field('onenglish')): ?>Agregar<?php else: ?>Add<?php endif ?></button>
                </div>
            </div>
            
        </div>
        <div class="row mx-2 mx-lg-2 mt-sm-5 justify-content-around">
            <div class="col-sm-3 ">
                <img class= "img-fluid"src="<?php the_field('img_spec4')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('title_c4')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec4')?></h5>
                <div class="row justify-content-center">
                    <button id="price_4" type="button" data-itemtitle="<?php the_field('title_c4')?>" data-price="<?php the_field('price_c4')?>" onclick="addFeature('price_4')" class="btn  btn-primary btn-luxury"><?php if (!get_field('onenglish')): ?>Agregar<?php else: ?>Add<?php endif ?></button>
                </div>
            </div>
            <div class="col-sm-3 mx-sm-5">
                <img class= "img-fluid"src="<?php the_field('img_spec5')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('title_c5')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec5')?></h5>
                <div class="row justify-content-center">
                 <button id="price_5" type="button" data-itemtitle="<?php the_field('title_c5')?>" data-price="<?php the_field('price_c5')?>" onclick="addFeature('price_5')" class="btn  btn-primary btn-luxury"><?php if (!get_field('onenglish')): ?>Agregar<?php else: ?>Add<?php endif ?></button>
                </div>
            </div>
            <div class="col-sm-3">
                <img class= "img-fluid"src="<?php the_field('img_spec6')?>" alt="part">
                <h4 class="text-center mt-2"><?php the_field('title_c6')?></h4>
                <h5 class="text-center mb-2"><?php the_field('descripcion_spec6')?></h5>
                <div class="row justify-content-center">
                    <button id="price_6" type="button" data-itemtitle="<?php the_field('title_c6')?>" data-price="<?php the_field('price_c6')?>" onclick="addFeature('price_6')" class="btn btn-luxury btn-primary "><?php if (!get_field('onenglish')): ?>Agregar<?php else: ?>Add<?php endif ?></button>
                </div>
            </div>
            
        </div>
        
        
        <h1 class="mt-5 mb-3 text-center text-md-start text-lg-start">Total</h1>
        <div class="calc_container mx-2 mx-lg-2  p-5 ">
            <h4><?php if (!get_field('onenglish')): ?>Precio del vehículo<?php else: ?>Vehicle price<?php endif ?></h4>
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h5><?php the_field('titulo1')?></h5>
                </div>
                <div class="col-auto">
                    <h5><?php the_field('base_price')?></h5>
                </div>
            </div>
            <h4 class="mt-3"><?php if (!get_field('onenglish')): ?>Accesorios<?php else: ?>Additional features<?php endif ?></h4>
            <div id="item_list">
                
            </div>

            <div class="my-4 pb-5  row justify-content-between">
                <div class="col-auto">
                    <h4><?php if (!get_field('onenglish')): ?>Monto Total<?php else: ?>Total amount<?php endif ?></h4>
                </div>
                <div class="col-auto">
                    <h4 id="total_amount"><?php the_field('base_price')?></h4>
                </div>
            </div>
        </div><!-- fin calc_container-->
        
    </div>

</div>

<?php get_footer(); ?>