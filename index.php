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
                <img class="carousel-img" src="https://dev-luxurycars.pantheonsite.io/wp-content/uploads/2022/04/carousel1.webp" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-luxury-carousel">Reserva</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="https://dev-luxurycars.pantheonsite.io/wp-content/uploads/2022/04/carousel1.webp" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-luxury-carousel">Reserva</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="carousel-img" src="https://dev-luxurycars.pantheonsite.io/wp-content/uploads/2022/04/carousel1.webp" alt="...">
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
                <img class="bd-placeholder-img brand-img-size" src="http://luxurycars.test/wp-content/uploads/2022/04/chevroletLogo.webp" alt="chevroletLogo">
                <h2>Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <button type="button" class="btn btn-luxury">Ver más</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <img class="bd-placeholder-img brand-img-size" src="http://luxurycars.test/wp-content/uploads/2022/04/lamborghiniLogo-scaled.webp" alt="lamborghiniLogo">
                <h2>Heading</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                <button type="button" class="btn btn-luxury">Ver más</button>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 text-center">
                <img class="bd-placeholder-img brand-img-size" src="http://luxurycars.test/wp-content/uploads/2022/04/fordLogo.webp" alt="fordLogo">
                <h2>Heading</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column</p>
                <button type="button" class="btn btn-luxury">Ver más</button>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!--brands-section-->

<section class="best-seller-section">
    <div class="container marketing">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">CHEVROLET <span class="text-muted">Camaro</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="http://luxurycars.test/wp-content/uploads/2022/04/chevroletCamaro.webp" alt="chevroletCamaroIndex">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">CHEVROLET <span class="text-muted">Camaro</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="http://luxurycars.test/wp-content/uploads/2022/04/lamborghiniAventador.webp" alt="lamborghiniAventadorIndex">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">CHEVROLET <span class="text-muted">Camaro</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="http://luxurycars.test/wp-content/uploads/2022/04/fordMustang.webp" alt="fordMustangIndex">
            </div>
        </div>
    </div><!-- /.container -->
</section>


<?php get_footer(); ?>