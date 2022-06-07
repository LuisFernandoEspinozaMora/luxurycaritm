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
                <img class="carousel-img" src="<?php the_field('slider3')?>" alt="carousel_ford">
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

<!--brands-section-->
<section class="brands-section">
    <div class="container marketing">
        <div class="row">
            <div class="col-lg-4 text-center">
                <img class="bd-placeholder-img brand-img-size" src="<?php the_field('marca_img1')?>" alt="chevroletLogo">
                <h2>Chevrolet</h2>
                <p>Encuentra nuevos caminos</p>
                <button type="button" class="btn btn-luxury">Ver más</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <img class="bd-placeholder-img brand-img-size" src="<?php the_field('marca_img2')?>" alt="lamborghiniLogo">
                <h2>Lamborghini</h2>
                <p>Más cerca de las carreteras</p>
                <button type="button" class="btn btn-luxury">Ver más</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <img class="bd-placeholder-img brand-img-size" src="<?php the_field('marca_img3')?>"fordLogo">
                <h2>Ford</h2>
                <p>Llegá más lejos</p>
                <button type="button" class="btn btn-luxury">Ver más</button>
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
                <h2 class="featurette-heading mb-4"><span class="tittle-decoration">CHEVROLET</span> Camaro</h2>
                <p class="lead">Fabricado con una arquitectura más pequeña y liviana que la generación anterior aprovecha al máximo sus proporciones, con un sistema de frenos más sensible, una mejor entrada y salida de curvas para un desempeño más ágil.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="http://luxurycars.test/wp-content/uploads/2022/04/chevroletCamaro.webp" alt="chevroletCamaroIndex">
            </div>
        </div>

        <div class="row featurette mb-5">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading mb-4"><span class="tittle-decoration">LAMBORGHINI</span> Aventador</h2>
                <p class="lead">Lamborghini sabe perfectamente cómo afrontar los desafíos y por eso ha creado el Aventador SVJ. Para fusionar una tecnología de vanguardia con un diseño excepcional, sin transigir en nada. En un futuro gobernado por la tecnología se están perdiendo las emociones reales, pero en el futuro que estamos diseñando están siempre en primer plano, porque siempre es el ser humano quien conduce. </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="http://luxurycars.test/wp-content/uploads/2022/04/lamborghiniAventador.webp" alt="lamborghiniAventadorIndex">
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading mb-4"><span class="tittle-decoration">FORD</span> Mustang</h2>
                <p class="lead">Desde hace más de 50 años, Ford ha cambiado la forma de contar con un vehículo listo para el trabajo pesado, con grandes capacidades, excelente desempeño y confianza con el lema: ¡Nacidos Ford, Nacidos Fuertes!</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="http://luxurycars.test/wp-content/uploads/2022/04/fordMustang.webp" alt="fordMustangIndex">
            </div>
        </div>

    </div><!-- /.container -->
</section>
<!--best-seller-section-->

<?php get_footer(); ?>