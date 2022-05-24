<?php get_header(); ?>

<main class="contenedor">
    <form class="formulario">

        <h1>Contact us</h1>
        <p>(<span>*</span>) Required fields</p>

        <div class="contact-area">

            <div class="fieldset-area">

                <fieldset>


                    <div class="form-group">
                        <label for="asunto">Detail</label>
                        <input type="text" class="form-control" id="asunto">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Name  <span>*</span></label>
                        <input type="text" class="form-control" id="nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Cellphone  <span>*</span></label>
                        <input type="tel" class="form-control" id="telefono" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Branch office</label>
                        <select class="form-control" id="exampleFormControlSelect1" required>
                            <option value="SJ" disabled selected>select an option</option>
                            <option value="SJ">San Jose</option>
                            <option value="GU">Guanacaste</option>
                            <option value="LI">Limon</option>
                            <option value="HE">Heredia</option>
                            <option value="PU">Puntarenas</option>
                            <option value="AL">Alajuela</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">E-mail <span>*</span></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" cols="20" rows="3"></textarea>
                    </div>

                </fieldset>
                <div class="btn_centrado"><button type="submit" class="btn btn-luxury">sent</button></div>
            </div>


            <div class="information">
                <p><span>Direction:</span> 700 meter sur de Multiplaza Escazú</p>

                <p><span>Showroom sales cellphone:</span> 2547-5145</p>

                <p><span>Workshop Services cellphone:</span> 2547-5145</p>

                <p><span>Workshop WhatsApp cellphone:</span> +506 8529 3842</p>
            </div>

        </div>

       
    </form>
</main>

<?php get_footer(); ?>