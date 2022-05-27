<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>
        <h2>Llene el formulario</h2>
        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion personal</legend>

                <label for="nombre">Nombre:</label>
                <input id="nombre" type="text" placeholder="Nombre">

                <label for="email">Email:</label>
                <input id="email" type="email" placeholder="Email">

                <label for="telefono">Teléfono:</label>
                <input id="telefono" type="tel" placeholder="Teléfono">

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" placeholder="Mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vende o Compra:</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>
                <label for="presupusto">Precio o Presupuesto:</label>
                <input id="presupusto" type="number" placeholder="Tu precio o presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contácto</legend>

                <p>Cómo desea ser contáctado</p>
                <div class="forma__contacto">
                    <label for="contactar__telefono">Teléfono</label>
                    <input name="contacto" type="radio" id="contactar__telefono" value="telefono">

                    <label for="contactar__email">Email</label>
                    <input name="contacto" type="radio" id="contactar__email" value="email">
                </div>
                <p>Si eligio teléfono, eliga la fecha y hora</p>
                <label for="fecha">Fecha:</label>
                <input id="fecha" type="date">

                <label for="hora">Hora:</label>
                <input id="hora" type="time" min="9:00" max="18:00">
            </fieldset>

            <input type="submit" class="boton__verde" value="Enviar">
        </form>
    </main>

    <?php incluirTemplate('header');?>