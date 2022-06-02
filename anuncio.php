<?php
require 'includes/funciones.php';


incluirTemplate('header');
?>
<main class="contenedor seccion contenido__centrado">
    <h1>Casa en venta frente al bosque</h1>
    <picture>
        <source srcset="/build/img/destacada.webp" type="image/webp">
        <source srcset="/build/img/destacada.jpg" type="image/jpeg">
        <img src="/build/img/destacada.jpg" alt="Imagen destacada" loading="lazy">
    </picture>
    <div class="resumen__propiedad">
        <p class="precio">$3,000,000</p>
        <ul class="iconos__caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="/build/img/icono_wc.svg" alt="WC">
                <p>3</p>
            </li>

            <li>
                <img class="icono" loading="lazy" src="/build/img/icono_estacionamiento.svg" alt="Estacionamiento">
                <p>3</p>
            </li>

            <li>
                <img class="icono" loading="lazy" src="/build/img/icono_dormitorio.svg" alt="Dormitorio">
                <p>4</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati adipisci excepturi quisquam
            recusandae! Nemo quam similique praesentium doloremque quia corrupti consequuntur quis impedit
            magnam inventore, expedita tempora distinctio, assumenda in?adipisicing elit. Obcaecati adipisci excepturi quisquam
            recusandae! Nemo quam similique praesentium doloremque quia corrupti consequuntur quis impedit
            magnam inventore, expedita tempora distinctio, assumenda in</p>

        <p>Consequuntur quis impedit magnam inventore, expedita tempora distinctio, assumenda in?adipisicing
            elit. Obcaecati adipisci excepturi quisquam
            recusandae! Nemo quam similique praesentium doloremque quia corrupti consequuntur quis impedit
            magnam inventore, expedita tempora distinctio, assumenda in</p>
    </div>
</main>

<?php incluirTemplate('footer'); ?>