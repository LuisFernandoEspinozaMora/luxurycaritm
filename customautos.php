<?php
/* Template Name: Autos */
?>
<?php get_header(); ?>

<section class="best-seller-section">
    <div class="container marketing">

        <div class="row featurette mb-5">
            <div class="col-md-7">
                <h2 class="featurette-heading mb-4"><span class="tittle-decoration">"<?php the_field('titulo1')?>"</span> Camaro</h2>
                <p class="lead">Fabricado con una arquitectura más pequeña y liviana que la generación anterior aprovecha al máximo sus proporciones, con un sistema de frenos más sensible, una mejor entrada y salida de curvas para un desempeño más ágil.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php the_field('imagen1')?>" alt="chevroletCamaroIndex">
            </div>
        </div>

        <div class="row featurette mb-5">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading mb-4"><span class="tittle-decoration">LAMBORGHINI</span> Aventador</h2>
                <p class="lead">Lamborghini sabe perfectamente cómo afrontar los desafíos y por eso ha creado el Aventador SVJ. Para fusionar una tecnología de vanguardia con un diseño excepcional, sin transigir en nada. En un futuro gobernado por la tecnología se están perdiendo las emociones reales, pero en el futuro que estamos diseñando están siempre en primer plano, porque siempre es el ser humano quien conduce. </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php the_field('imagen1')?>" alt="lamborghiniAventadorIndex">
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

<?php get_footer(); ?>