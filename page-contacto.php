<?php get_header(); ?>


<main>

    <div class="hero formulario text-center">
        <h1>contactenos</h1>
    </div>


    <div class="container information">
        <div class="row text-center">
            <div class="col">
                <h3 class="fas fa-map-marker"></h3>
                <p><span>Dirección:</span></p>
                <p> 700 metros sur de Multiplaza Escazú</p>
            </div>
            <div class="col">
                <h3 class="fas fa-phone-alt"></h3>
                <p><span>Showroom de ventas Tel:</p>
                <p></span> 2547 5145</p>
            </div>
            <div class="col">
                <h3 class="fab fa-whatsapp"></h3>
                <p><span>WhatsApp taller Tel:</span></p>
                <p> +506 8529 3842</p>
            </div>
        </div>
    </div>

    <form class="contenedor formulario">

        <h3 class="text-center">llena esto si tienes alguna duda</h3>

        <p>(<span>*</span>) campos obligatorios</p>

        <div class="">

            <div>

                <fieldset class="fieldset-area">
                    <div class="form-group">
                        <!--<label for="asunto">Asunto</label>-->
                        <input type="text" class="form-control" id="asunto" placeholder="Asunto">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="nombre" required placeholder="Nombre *">
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control" id="telefono" required placeholder="Teléfono *">
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" required>
                            <option value="SJ" disabled selected>Seleccione una opción</option>
                            <option value="SJ">San Jose</option>
                            <option value="GU">Guanacaste</option>
                            <option value="LI">Limon</option>
                            <option value="HE">Heredia</option>
                            <option value="PU">Puntarenas</option>
                            <option value="AL">Alajuela</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleFormControlInput1" required placeholder="E-mail *">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" cols="20" rows="3" placeholder="Mensaje"></textarea>
                    </div>

                </fieldset>
                <div class="btn_centrado"><button type="submit" class="btn btn-luxury">Enviar</button></div>
            </div>

        </div>


    </form>



</main>



<?php get_footer(); ?>