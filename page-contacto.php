<?php get_header(); ?>


<main class="contenedor">
<form class="formulario">

    <h1>contactenos</h1>
    <p>(*) campos obligatorios</p>

    <fieldset>


        <div class="form-group">
            <label for="asunto">Asunto</label>
            <input type="text" class="form-control" id="asunto">
        </div>

        <div class="form-group">
            <label for="nombre">Nombre *</label>
            <input type="text" class="form-control" id="nombre" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono *</label>
            <input type="tel" class="form-control" id="telefono" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Sucursal</label>
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
            <label for="exampleFormControlInput1">E-mail *</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensaje</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" cols="20" rows="5"></textarea>
        </div>

    </fieldset>
    
    <div class="btn_centrado"><button type="submit" class="btn btn-luxury">Enviar</button></div>
</form>
</main>


<?php get_footer(); ?>